import React, { Component } from 'react';
import ReactDOM from 'react-dom';
//import MediaCard from '../components/MediaCard';
import WPAPI from 'wpapi';

// Tutorial https://www.robinwieruch.de/react-fetching-data/
class Library extends Component {
  constructor() {
    super();
    this.state = {
      mediaList: [],
    }
  }

  componentDidMount(){
    var wp = new WPAPI({ endpoint: 'http://media.experiensa.com/wp-json' });

    wp.media().perPage( 100 ).embed().get(function( err, data ) {
      if ( err ) {
        //console.log(err);
      }
      return data;

    }).then( data => {
      this.setState({
        mediaList: data,
      })
    }

  );

}

render(){
  //console.log(this.state.mediaList);
  return(
    <div>
      <input type="text"/>
      <div className="card-columns">
        {this.state.mediaList.map((item, id) => {
          return (
            <div key={id} className="card grow">
              <img src={item.source_url} alt="{item.title.rendered}" className="card-img-top img-fluid"/>
              <div className="card-img-overlay hover-bg-black-40">
                <span className="card-title white i media-title">{item.title.rendered}</span>
                <div className="media-buttons absolute bottom-1">
                  <a href={item.guid.rendered} className="btn btn-outline-light btn-sm" download><i className="fas fa-download"></i></a>
                </div>
              </div>
            </div>
          )
        })}
      </div>
    </div>
  )
}
}

ReactDOM.render(<Library/>, document.getElementById('library'));

export default Library;
