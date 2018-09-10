import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import MediaCard from '../components/MediaCard';

// Tutorial https://www.robinwieruch.de/react-fetching-data/

export default {
  init() {

    const API = 'http://media.experiensa.com/wp-json/wp/v2/media';
    const DEFAULT_QUERY = '?_embed&per_page=43';

    class Library extends Component {
      constructor() {
        super();
        this.state = {
          mediaData: [],
          search: '',
          isLoading: false,
        }
      }

      componentDidMount() {
        this.setState({ isLoading: true });

        let dataURL = (API + DEFAULT_QUERY);
        fetch(dataURL)
        .then(res => {
          if (res.ok) {
            return res.json();
          } else {
            throw new Error('Something went wrong ...');
          }
        })
        .then(res => {
          this.setState({
            mediaData: res,
            isLoading: false,
            error: null,
          })
        })
        .catch(error => this.setState({ error, isLoading: false }))
      }

      updateSearch(event){
        this.setState({search: event.target.value.substr(0,20)})
      }

      render() {

        //});
        let filteredMedia = this.state.mediaData.filter(
          (media) => {
            return media._embedded['wp:term']['4']['0'].name.toLowerCase().indexOf(this.state.search.toLowerCase()) !== -1;
          }
        );

        if (this.state.error) {
          return <p>{this.state.error.message}</p>;
          }


          if (this.state.isLoading) {
            return <p>Loading...</p>
          }

          return (
            <div>
              <input className="form-control form-control-lg" type="text" placeholder="Search images by country" value={this.state.search} onChange={this.updateSearch.bind(this)}/>
              <br/>
              <MediaCard />
              <div className="card-columns">
                {
                  filteredMedia.map((media, index) => {
                    return <div key={index} className="card grow">
                      <img src={media.guid.rendered} className="card-img-top img-fluid"/>
                      <div className="card-img-overlay hover-bg-black-40">
                        <span className="card-title white b media-title">{media._embedded['wp:term']['4']['0'].name}</span><br/>
                        <span className="card-title white i media-title">{media.title.rendered}</span>
                        <div className="media-buttons absolute bottom-1">
                          <a href={media.guid.rendered} className="btn btn-outline-light btn-sm" download><i className="fas fa-download"></i></a>
                        </div>
                      </div>
                    </div>
                  })}
                </div>
              </div>
            )
          }
        }
        ReactDOM.render(<Library/>, document.getElementById('library'));
      },
    };



    // let library = this.state.movies.map((movie, index) => {
    //   return <div key={index} className="card grow">
    //     <img src={movie.guid.rendered} className="card-img-top img-fluid"/>
    //     <div className="card-img-overlay hover-bg-black-40">
    //       <span className="card-title white b media-title">{movie._embedded['wp:term']['4']['0'].name}</span><br/>
    //       <span className="card-title white i media-title">{movie.title.rendered}</span>
    //       <div className="media-buttons absolute bottom-1">
    //         <a href={movie.guid.rendered} className="btn btn-outline-light btn-sm" download><i className="fas fa-download"></i></a>
    //       </div>
    //     </div>
    //   </div>
    //
    // });

    // @if ($terms )
    //   <span class="white"><i class="fas fa-map-marker"></i> {{$terms[0]->name }}</span>
    // @endif
    // <div class="media-buttons" style="position:absolute; bottom:10px;">
    //   <a href="{{ $image[0] }}" class="btn btn-outline-light btn-sm" download><i class="fas fa-download"></i></a>
    //   @if ($url)
    //     <a href="{{ $url }}" class="btn btn-outline-light btn-sm" target="_blank"><i class="fas fa-globe"></i></a>
    //   @endif
    //   <a href="{{ get_permalink() }}" class="btn btn-outline-light btn-sm" target="_blank"><i class="fas fa-info-circle"></i></a>
    // </div>
