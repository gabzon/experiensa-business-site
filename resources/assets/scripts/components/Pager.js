import React from 'react';
import PropTypes from 'prop-types';

class Pager extends React.Component{
  render(){
    let cur = +this.props.currentPage,
    max = +this.props.totalPages.length,
    go = this.props.pagesSwitcher;

    return (
      <ul className="pager">
        {cur > 1 && <li><a data-rel={cur - 1} onClick={go} href="#">&lt;</a></li>}
        {this.props.totalPages.map((item,i) => {
          if(i < cur + 2 && i > cur - 4 || i === max - 1 || i === 0) {
            return <li key={i}><a data-rel={item} onClick={go} href="#">{item}</a></li>
          } else if(i === cur - 4 || i === cur + 2) {
            return <li key={i}>...</li>
          }
        })}
        {cur < max && <li><a data-rel={cur + 1} onClick={go} href="#">&gt;</a></li>}
      </ul>
    );
  }
}

Pager.propTypes = {
  currentPage: PropTypes.string,
  totalPages: PropTypes.array,
  pagesSwitcher: PropTypes.func,
}

export default Pager;
