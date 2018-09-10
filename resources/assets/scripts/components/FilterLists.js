import React from 'react';
import PropTypes from 'prop-types';
import options from '../data/options';

class FilterLists extends React.Component {
  render(){
    let filtersSwitcher = this.props.filtersSwitcher,
    category = this.props.category;

    let listContent = this.props.filtersPack[category].map((item, i) => {
      return <li key={i}><a data-category={category} data-filter={item} onClick={filtersSwitcher} href="#">{item}</a></li>
    });

    return (
      <div>
        <h3>{category}</h3>
        <ul key={this.props.listKey} className="filter-nav">
          <li className={options.activeClass}><a data-category={category} data-filter="all" onClick={filtersSwitcher} href="#">all</a></li>
          {listContent}
        </ul>
      </div>
    );
  }
}

FilterLists.propTypes = {
  filtersSwitcher: PropTypes.func,
  filtersPack: PropTypes.object,
  category: PropTypes.string,
  listKey: PropTypes.number,
}

export default FilterLists;
