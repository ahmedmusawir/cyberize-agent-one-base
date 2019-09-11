import React, { Component } from 'react';

class SearchForm extends Component {
  onSearchChange = e => {
    this.setState({ searchText: e.target.value });
  };

  handleSubmit = e => {
    e.preventDefault();
    this.props.onSearch(this.query.value);
    e.currentTarget.reset();
  };

  render() {
    return (
      <div>
        <form className="search-form" onSubmit={this.handleSubmit}>
          <input
            className="form-control"
            type="search"
            onChange={this.onSearchChange}
            name="search"
            placeholder="Search A Movie ..."
            ref={input => (this.query = input)}
          />
          <button
            type="submit"
            id="submit"
            className="btn btn-secondary btn-block mt-2"
          >
            Click Me
          </button>
        </form>
      </div>
    );
  }
}

export default SearchForm;
