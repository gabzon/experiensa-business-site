import React from 'react';

class Search extends React.Component{
  fetchSearchTerm = SearchTearm =>{
    const apiURL = 'http://media.experiensa.com/wp-json/wp/v2/';
    const params = 'dkdkd';
    getJson(apiURL+params).then(data => this.setState({data}))
  }
}

export default Search
