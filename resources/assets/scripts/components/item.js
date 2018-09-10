import React from 'react';
import PropTypes from 'prop-types';

class Item extends React.Component {

  renderItem(item, key){
    let sexSign = <span>&#9792;</span>;

    if (item.sex === 'man'){
      sexSign = <span>&#9794;</span>;
    }

    const bgColor = {
      backgroundColor: item.color,
      color: 'white',
    }

    if (item.color === 'white') {
      bgColor.color = 'black';
    }

    switch(item.color) {
      case 'white':
      bgColor.color = 'black';
      break;
      case 'blue':
      bgColor.color = 'white';
      break;
      case 'brown':
      bgColor.color = 'white';
      break;
      case 'beige':
      bgColor.color = 'black';
      break;
      case 'gray':
      bgColor.color = 'black';
      break;
      case 'black':
      bgColor.color = 'white';
      break;
      default:
      bgColor.color = 'black';
    }

    return(
      <div key={key} className="box" style={bgColor}>
      <div>{item.type}</div>
      <div>{item.color}</div>
      <div>{item.sex} {sexSign}</div>
      </div>
    )
  }


  render(){
    const items = this.props.items;
    return (
      <div className="itemList">
      {items.map(this.renderItem)}
      </div>
    )
  }
}

Item.propTypes = {
  items: PropTypes.array.isRequired,
}

export default Item;






/*

review bugs:
use refs

*/

var options = {
	categories: [
		'type',
		'color',
		'sex'
	],
	postsPerPage: 9,
	activeClass: 'active'
};

var App = React.createClass({
	getInitialState() {
		return {
			listOfPosts: null,
			currentPageId: 1,
			chosen: null,
			categories: null
		}
	},
	componentWillMount() {
		let chosenPreset = [];
		for(let i = 0; i < options.categories.length; i++) {
			chosenPreset.push('all');
		}
		this.setState({
			listOfPosts: posts,
			chosen: chosenPreset,
			categories: options.categories
		})
	},
	componentDidMount() {
		this.activeLink();
	},
	componentDidUpdate(prevProps, prevState){
		if(prevState.currentPageId !== this.state.currentPageId){
			this.activeLink();
		}
	},
	activeLink() {
		$(`a[data-rel=${this.state.currentPageId}]`).parents('li').addClass(options.activeClass).siblings().removeClass(options.activeClass);
	},
	pagesSwitcher(e) {
		e.preventDefault();
		let newPageId = e.currentTarget.getAttribute('data-rel');
		this.setState({
			currentPageId: newPageId
		})
	},
	filtersSwitcher(e) {
		e.preventDefault();
		let cat = e.currentTarget.getAttribute('data-category'),
			filter = e.currentTarget.getAttribute('data-filter'),
			catPos = this.state.categories.indexOf(cat),
			chosen = this.state.chosen;
		chosen.splice(catPos,1,filter);
		this.setState({
			chosen: chosen,
			currentPageId: 1
		})
		$(e.currentTarget).parents('li').addClass(options.activeClass).siblings().removeClass(options.activeClass);
	},
	render: function() {
		let postsPerPage = options.postsPerPage,
			currentPageId = this.state.currentPageId,
			catNames = this.state.categories,
			chosenFilters = this.state.chosen;

		// isolate filters
		var filtersPack = {};
		this.state.categories.forEach((category) => {
			filtersPack[category] = [];
		});
		for(var category in filtersPack) {
			this.state.listOfPosts.forEach((item) => {
				if(filtersPack[category].indexOf(item[category]) === -1) {
					filtersPack[category].push(item[category]);
				}
			});
			filtersPack[category].sort((a, b) => {
				if (a.toLowerCase() < b.toLowerCase()) return -1;
				if (a.toLowerCase() > b.toLowerCase()) return 1;
				return 0;
			});
		}

		// filter posts
		let filteredPosts = this.state.listOfPosts.filter((item) => {
			let picker = [];
			for(let i = 0; i < options.categories.length; i++) {
				if(item[catNames[i]]) {
					if(item[catNames[i]] === chosenFilters[i] || chosenFilters[i] === 'all') {
						picker.push(true);
					} else {
						picker.push(false);
					}
				}
			}
			if(picker.every((n) => {return n === true})) {
				return item;
			}
		});

		// find posts for current page
		let pagedPosts = filteredPosts.filter((item, i) => {
			return i > currentPageId * postsPerPage - postsPerPage -1 && i <= currentPageId * postsPerPage -1;
		});

		// find total amount of pages
		let pagesCounter = Math.ceil(filteredPosts.length / postsPerPage),
			totalPages = [];
		for(let i = 1; i <= pagesCounter; i++) {totalPages.push(i);}

		return (
			<div>
				<Filters filtersPack={filtersPack} filtersSwitcher={this.filtersSwitcher} />
				<Posts posts={pagedPosts} />
				{pagesCounter > 1 && <Pager totalPages={totalPages} currentPage={currentPageId} pagesSwitcher={this.pagesSwitcher} />}
			</div>
		);
	}
});

var FilterLists = React.createClass({
	render: function() {
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
});

var Posts = React.createClass({
	render: function() {

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
});

var Pager = React.createClass({
	render: function() {
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
});

ReactDOM.render(<App />, document.getElementById('filter'));
