import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default {
  init() {
    // JavaScript to be fired on all pages
    class App extends Component {

      constructor() {
        super();
        this.state = { client: [] }
      }

      componentDidMount() {
        let dataURL = "http://localhost/experiensa/wp-json/wp/v2/exp_client";
        fetch(dataURL)
        .then(res => res.json())
        .then(res => {
          this.setState({
            client: res,
          })
        })
      }

      render(){
        let clients = this.client.map((client, index) => {
          return <div key={index}>
          <p><strong>Title:</strong> {client.rendered.title}</p>
          </div>
        })

        return(
          <div>
          <h1>Client</h1>
          { clients }
          </div>
        )
      }
    }

    ReactDOM.render(<App/>, document.getElementById('react'));
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
