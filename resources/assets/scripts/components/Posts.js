import React from 'react';
import PropTypes from 'prop-types';

class Posts extends React.Component{
  render(){
    return (
      <div className="boxes">
        {this.props.posts.map((item,i) => {
          return (
            <div key={i} className="box">
              <div>{item.type}</div>
              <div>{item.color}</div>
              <div>{item.sex}</div>
            </div>
          )
        })}
      </div>
    );
  }
}

Posts.propTypes = {
  posts: PropTypes.array.isRequired,
}

export default Posts;
