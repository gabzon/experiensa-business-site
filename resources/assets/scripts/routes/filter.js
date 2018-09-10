import React, { Component } from 'react';
import { render } from 'react-dom';
import posts from '../data/data.js';
//import Item from '../components/item';
import options from '../data/options.js';
import Posts from '../components/Posts';
import Filters from '../components/Filters';
import Pager from '../components/Pager';

// https://codepen.io/Dmitriy_Dubravin/pen/YWZjWQ
export default {
  init() {
    // JavaScript to be fired on the home page
    class AppFilter extends Component{
      constructor(){
        super();

        this.pagesSwitcher = this.pagesSwitcher.bind(this);
        this.filtersSwitcher = this.filtersSwitcher.bind(this);
        //this.pagesSwitcher = this.pagesSwitcher.bind(this);

        this.state = {
          listOfPosts: null,
          currentPageId: 1,
          chosen: null,
          categories: null,
        }
      }

      componentWillMount() {
        let chosenPreset = [];
        for(let i = 0; i < options.categories.length; i++) {
          chosenPreset.push('all');
        }
        this.setState({
          listOfPosts: posts,
          chosen: chosenPreset,
          categories: options.categories,
        })
      }

      componentDidMount() {
        this.activeLink();
      }

      componentDidUpdate(prevProps, prevState){
        if(prevState.currentPageId !== this.state.currentPageId){
          this.activeLink();
        }
      }

      activeLink() {
        $(`a[data-rel=${this.state.currentPageId}]`).parents('li').addClass(options.activeClass).siblings().removeClass(options.activeClass);
      }

      pagesSwitcher(e) {
        e.preventDefault();
        let newPageId = e.currentTarget.getAttribute('data-rel');
        this.setState({
          currentPageId: newPageId,
        })
      }

      filtersSwitcher(e) {
        e.preventDefault();
        let cat = e.currentTarget.getAttribute('data-category'),
        filter = e.currentTarget.getAttribute('data-filter'),
        catPos = this.state.categories.indexOf(cat),
        chosen = this.state.chosen;
        chosen.splice(catPos,1,filter);
        this.setState({
          chosen: chosen,
          currentPageId: 1,
        })
        $(e.currentTarget).parents('li').addClass(options.activeClass).siblings().removeClass(options.activeClass);
      }


      render(){

        //const shoes = posts;
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

        return(
          <div>
            <h1>Hello from React 1</h1>
            <Filters filtersPack={filtersPack} filtersSwitcher={this.filtersSwitcher} />
            <Posts posts={pagedPosts} />
            {pagesCounter > 1 && <Pager totalPages={totalPages} currentPage={currentPageId} pagesSwitcher={this.pagesSwitcher} />}
          </div>
        )
      }
    }
    render(<AppFilter/>,document.getElementById('react-filter'));
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};

//<Item items={shoes}/>
