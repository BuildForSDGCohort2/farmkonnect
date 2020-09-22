import React from 'react';
import { Link } from 'react-router-dom'


const Content = () => (
    <React.Fragment>
<div className="jumbotron text-center">
    <div className="container bold jumbroton-text">
        <h1 className="jumbotron-heading">Farmkonnect</h1>
        <p className="lead">
           Easing access to farm products and maximizing profits for farmers while connecting their products to consumers
        </p>
    </div>
</div>

    <div className="main">
        <div className="container mt-2">
            <div className="row mt-4">
         <div className="col-12 col-lg-6">
            <div>
                <a className="header-text nav-link active pl-0 mb-0">Farmkonnect</a>
                <hr className="mt-0" />
            </div>
            <div className="text-justify">
            Easing access to farm products and maximizing profits for farmers while connecting their products to consumers
            </div>
        </div>

        <div className="col-12 col-lg-6">
            <img src=" {{ asset('images/transformation_image.jpg') }} " data-src="{{ asset('images/transformation_image.jpg') }}" alt="farmkonnect" 
            className="img img-fluid rounded m-0 image_hover_effect lazyload blur-up" width="500" height="300" />
        </div> 
    </div>



    <div className="row mt-4">
        <div className="col-12 col-lg-6">
            <div>
                <a className="header-text nav-link active pl-0" href="#">Global Market</a>
                <hr className="mt-0" />
            </div>
                Connecting the traders together in one location via the internet.
        </div>


    <div className="col-12 col-lg-6">
        <img src=" {{ asset('images/streaming.jpg') }}" data-src=" {{ asset('images/streaming.jpg') }} " alt="farmkonnect" 
        className="img img-fluid rounded m-0 image_hover_effect lazyload blur-up" width="500" height="300" />
        </div>
    </div>


    <div className="row mt-4">
        <div className="col-12 col-lg-6">
            <div>
                <a className="header-text nav-link active pl-0" href="#">Recent Farmers</a>
                <hr className="mt-0" />
            </div>
                Farmers that were recently registered....
        </div>


    <div className="col-12 col-lg-6">
        <img src=" {{ asset('images/streaming.jpg') }}" data-src=" {{ asset('images/streaming.jpg') }} " alt="testimony" 
        className="img img-fluid rounded m-0 image_hover_effect lazyload blur-up" width="500" height="300" />
        </div>
    </div>


    <div className="row mt-4">
        <div className="col-12 col-lg-6">
            <div>
                <a className="header-text nav-link active pl-0" href="#">Testimonies</a>
                <hr className="mt-0" />
            </div>
              Here is a list of testimonies from farmers and customers about their trading and the advantage of farmkonnect.
        </div>


    <div className="col-12 col-lg-6">
        <img src=" {{ asset('images/streaming.jpg') }}" data-src=" {{ asset('images/streaming.jpg') }} " alt="farmkonnect" 
        className="img img-fluid rounded m-0 image_hover_effect lazyload blur-up" width="500" height="300" />
        </div>
    </div> 
</div> 
</div> 
</React.Fragment>
);

export default Content