import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import { render } from 'react-dom';

    const Header = () => ( 
    <nav className="navbar navbar-expand-md sticky-top shadow-sm mb-0" role="navigation">
    <div className="container-fluid">
    <button className="navbar-toggler" type="button" 
        data-trigger="#main_nav" data-toggle="collapse"  aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
        <span className="navbar-toggler-icon"></span>
    </button>
   <a className="navbar-brand mb-0 d-none d-lg-block" to='/'>
        <img src='images/nav-brand.jpg' alt="Farmkonnect Logo" width="30" height="30" 
        title="Farmkonnect Logo" className="img-fluid mt-0 mb-0 d-inline-block align-top" />
    </a>
    
   <ul className="nav navbar-nav d-lg-none ml-auto visible-xs navbar-icons d-flex flex-row">  
        <a className="navbar-brand mb-0 d-lg-none" to='/'>
            <img src="{{ URL::to('images/nav-brand.jpg' ) }}" alt="farmkonnect Logo" width="30" height="30" 
            title="Farmkonnect Logo" className="img-fluid mt-0 mb-0 d-inline-block align-top" />
        </a>
    </ul>
    
    <ul className="nav navbar-nav d-lg-none visible-xs ml-auto navbar-icons d-flex flex-row">    
        <li className="nav-item"><a className="nav-link"><i className="fa fa-search fa-lg open-overlay-search"></i></a></li>
        <div id="myOverlay" className="search-overlay">
            <span className="closebtn close-overlay-search" title="Close Overlay">×</span>
            <div className="search-overlay-content">
            </div>
          </div>
    </ul>
    
    <div className="collapse navbar-collapse" id="main_nav">
        <div className="offcanvas-header mt-3">  
            <button className="btn btn-outline-danger btn-close pull-right btn-style"> &times Close </button>
            <h5 className="py-2 text-white"><a className="nav-link m-0 p-0" to='/'>
                <img src="images/nav-brand.jpg" alt="farmkonnect Logo" width="30" height="30" 
                    title="Farmkonnect Logo" className="img-fluid mt-0 mb-0 d-inline-block align-top" />
                Farmkonnect</a>
                </h5>
          </div>
    
    <ul className="navbar-nav mr-auto mt-lg-0">
        <li className="nav-item li-categories dropdown">
            <a className="nav-link dropdown-toggle categories" to="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i className="fa fa-list" aria-hidden="true"></i> Categories</a>
            <div className="dropdown-menu" aria-labelledby="dropdownId" id="append-categories">
            </div>
        </li>
    </ul>
    <div id="search"  class="navbar-nav abs-center-x">
    <form className="form-inline d-none d-lg-block" action="{{ route('search') }}" method="GET"> 
            <div className="input-group">
                <div className="input-group-prepend">
                    <span className="input-group-text btn-style" id="basic-addon1"><i className="fa fa-search fa-lg"></i></span>
                </div>                        
                <input type="text" name="keyword" id="keyword-search" 
                className="form-control py-4 keyword_search" placeholder="Search for products................"
                aria-label="keyword-search" aria-describedby="basic-addon1" />
                <div id="search_result" className="dropdown-menu search_result_dropdown"></div>                        
            </div>
    </form>    
    </div>
    <ul className="navbar-nav ml-auto">
        <li className="nav-item">
            <a className="nav-link" to='/products'>
                Products
            </a>
        </li>

    <li className="nav-item">
        <Link className="nav-link" to='/register'>Register</Link>
    </li>
    <li className="nav-item">
            <Link className="nav-link" to='/login'>Login</Link>
    </li> 
              </ul>
            </div> 
        </div>
    </nav>
);

export default Header
