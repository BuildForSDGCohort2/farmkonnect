import React from 'react';
import { Link } from 'react-router-dom'

const Footer = () => (
  <footer class="mt-auto">
<div className="mt-5 pt-3 pb-3 footer">
    <div className="container-fluid">
      <div className="row">
        <div className="col-12 col-lg-5 col-xs-12 about-church mt-4">
          <h2>Farmkonnect</h2>
          <p className="pr-5 text-white-50">
            Farmkonnect::connecting farm products to consumers....
          </p>
          <p>
            <h5>Social media</h5>
            <a href="#" className="pr-2"><i className="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a>
            <a href="https://wa.me/2347065832875" className="pr-2"><i className="fa fa-whatsapp fa-lg" aria-hidden="true"></i></a>               
            <a href="#" className="pr-2"><i className="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
            <a href="#" className="pr-2"><i className="fa fa-twitter-square fa-lg" aria-hidden="true"></i></a>                
            <a href="#" className="pr-2"><i className="fa fa-linkedin-square fa-lg"></i></a>
        </p>
        </div>
        <div className="col-lg-3 col-xs-12 links mt-2">
          <h4 className="mt-lg-0 mt-sm-3">Links</h4>
            <ul className="m-0 p-0">
              <li>- <a href="#">About us</a></li>
              <li>- <a href="#">Testimonies</a></li>
              <li>- <a href="#">Blog</a></li>
              <li>- <a href="#">Administration</a></li>
            </ul>
        </div>
        <div className="col-lg-4 col-xs-12 location mt-4">
          <h4 className="mt-lg-0 mt-sm-4">Location</h4>
          <p><i className="fa fa-address-book fa-lg" aria-hidden="true"></i> 
                No. 8 off Farmkonnect avenue ..... Nigeria
            </p>
          <p><i className="fa fa-globe fa-lg"></i> Online, Nigeria.</p>
          
          <p className="mb-2"><a className="text-white underline" href="tel:+2348077842973">
              <i className="fa fa-phone fa-lg mr-3"></i>+234....</a>
          </p>
          <p>
              <i className="fa fa-envelope-o fa-lg mr-3" aria-hidden="true"></i> farmkonnect@farmkonnect.com
        </p>
        </div>
      </div>
      <div className="row mt-4">
        <div className="col copyright">
          <p className="mb-0"><small className="text-white-100"> ©Farmkonnect 2020. by Team 108 Goup A
              All Rights Reserved.</small><br/>
              <span>Team Lead: <a href="https://www.twitter.com/alemsbaja" className="twitter_handle" >@alemsbaja</a></span>
        </p>
 
        </div>
      </div>
    </div>
    </div>
    </footer>
);

export default Footer
