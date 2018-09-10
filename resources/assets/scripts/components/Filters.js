import React from 'react';
import PropTypes from 'prop-types';
import FilterLists from './FilterLists';

class Filters extends React.Component{
  render(){
    let filtersPack = this.props.filtersPack,
      categories = [];

    for(var category in filtersPack) {
      categories.push(category);
    }
    let lists = categories.map((item, i) => {
      return <FilterLists category={item} filtersPack={filtersPack} filtersSwitcher={this.props.filtersSwitcher} listKey={i} key={i} />
    });

    return (
      <div className="filter-navs">
        {lists}
      </div>
    );
  }
}

Filters.propTypes = {
  filtersPack: PropTypes.object,
  filtersSwitcher: PropTypes.func.isRequired,
}

export default Filters;
