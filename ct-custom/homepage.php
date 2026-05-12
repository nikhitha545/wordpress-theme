<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<style>
  .main-container {
    max-width: 1100px;
    margin: 40px auto;
    padding: 0 30px;
  }

  .breadcrumb {
    font-size: 13px;
    color: #888;
    margin-bottom: 20px;
  }

  .page-title {
    color: #E8450A;
    font-size: 28px;
    margin-bottom: 15px;
  }

  .page-desc {
    color: #555;
    font-size: 14px;
    margin-bottom: 40px;
    line-height: 1.7;
  }

  .two-columns {
    display: flex;
    gap: 40px;
  }

  .contact-form {
    flex: 1;
  }

  .contact-form h3 {
    color: #E8450A;
    border-bottom: 2px solid #1a1a2e;
    padding-bottom: 10px;
    margin-bottom: 20px;
  }

  .contact-form input,
  .contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
  }

  .contact-form textarea {
    height: 100px;
  }

  .contact-form button {
    background: #E8450A;
    color: white;
    border: none;
    padding: 10px 25px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
  }

  .reach-us {
    flex: 1;
  }

  .reach-us h3 {
    color: #E8450A;
    border-bottom: 2px solid #1a1a2e;
    padding-bottom: 10px;
    margin-bottom: 20px;
  }

  .reach-us p {
    font-size: 14px;
    color: #555;
    margin-bottom: 10px;
    line-height: 1.7;
  }
</style>

<div class="main-container">
  
  <!-- BREADCRUMB -->
  <p class="breadcrumb">Home / Who we are / Contact</p>

  <!-- PAGE TITLE -->
  <h1 class="page-title">Contact</h1>
  <p class="page-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam primis lorem non velit mattis ullamcorper. Curabitur volutpat parturient et magna dis parturient montes, nascetur ridiculus mus.</p>

  <!-- TWO COLUMNS -->
  <div class="two-columns">

    <!-- CONTACT FORM -->
    <div class="contact-form">
      <h3>CONTACT US</h3>
      <input type="text" placeholder="Name *">
      <div style="display:flex;gap:10px">
        <input type="text" placeholder="Phone *">
        <input type="email" placeholder="Email *">
      </div>
      <textarea placeholder="Message *"></textarea>
      <button>SUBMIT</button>
    </div>

    <!-- REACH US -->
    <div class="reach-us">
      <h3>REACH US</h3>
      <p><strong>Coalition Skills Test</strong></p>
      <p>515 La Plata Street<br>4200 Argentina</p>
      <p>Phone: 485.154.11.28.88</p>
      <p>Fax: 385.154.33.56.78</p>
    </div>

  </div>

</div>

<?php get_footer(); ?>