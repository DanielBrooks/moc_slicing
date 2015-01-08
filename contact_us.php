<!DOCTYPE html>
<html class="no-js">
  <head>
    <?php include('partials/_head.php'); ?>
  </head>
  <body>
    <div class="wrapper">
      <div class="page-contact">
        
        <?php include('partials/_header.php'); ?>
        
        <div class="map-block"></div>
        
        <div class="container">
          <ul class="address-list row">
            <li class="col-md-3">
              <a href="#" class="title">
                <span class="fa fa-map-marker"></span>
                SF bay area
              </a>
              <p class="address">
                541 Jefferson Ave, Suit 100
                <br>
                Redwood City,
                <br>
                CA 94063
              </p>
              <span class="phone">1 (177) 219 67 11</span>
              <a href="#" class="email">worldclass@masterofcode.com</a>
            </li>
            <li class="col-md-3">
              <a href="#" class="title active">
                <span class="fa fa-map-marker"></span>
                Scottsdale
              </a>
              <p class="address">
                7330 East Earll Drive, Suite G 
                <br>
                Scottsdale,
                <br>
                Arizona 85251
              </p>
              <span class="phone">1 (877) 219 32 65</span>
              <a href="#" class="email">worldclass@masterofcode.com</a>
            </li>
            <li class="col-md-3">
              <a href="#" class="title">
                <span class="fa fa-map-marker"></span>
                Netherlands
              </a>
              <p class="address">
                Titaniumstraat 41-G,
                <br>
                Rotterdam, 3067GD
              </p>
              <span class="phone">1 (447) 219 32 31</span>
              <a href="#" class="email">worldclass@masterofcode.com</a>
            </li>
            <li class="col-md-3">
              <a href="#" class="title">
                <span class="fa fa-map-marker"></span>
                Canada
              </a>
              <p class="address">
                67 Harry Collins 
                <br>
                Winnipeg,
                <br>
                MB R2M 4N1
              </p>
              <span class="phone">9 (894) 778 32 44</span>
              <a href="#" class="email">worldclass@masterofcode.com</a>
            </li>
          </ul>
        </div>
        
        <div class="contact-form-block">
          <div class="container">
            
            <h1 class="caption">
              Request a quote
              <span class="caption-line"></span>
            </h1>
            
            <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_1">
              <form method="post" enctype="multipart/form-data" id="gform_1" action="/mocstagenew/contacts/">
                <div class="gform_heading">
                  <h3 class="gform_title">Contact Form</h3>
                  <span class="gform_description"></span>
                </div>
                
                <div class="gform_body">
                  <ul id="gform_fields_1" class="gform_fields top_label description_below">
                    
                    <li id="field_1_1" class="gfield gfield_contains_required input-block">
                      <label class="gfield_label" for="input_1_1">Name<span class="gfield_required">*</span></label>
                      <div class="ginput_container">
                        <input name="input_1" id="input_1_1" placeholder="Name" type="text" value="" class="medium" tabindex="1">
                      </div>
                    </li>
                    
                    <li id="field_1_2" class="gfield gfield_contains_required input-block">
                      <label class="gfield_label" for="input_1_2">Email<span class="gfield_required">*</span></label>
                      <div class="ginput_container">
                        <input name="input_2" id="input_1_2" placeholder="Email" type="text" value="" class="medium" tabindex="2">
                      </div>
                    </li>
                    
                    <li id="field_1_3" class="gfield gfield_contains_required input-block">
                      <label class="gfield_label" for="input_1_3">Phone<span class="gfield_required">*</span></label>
                      <div class="ginput_container">
                        <input name="input_3" id="input_1_3" placeholder="Phone" type="text" value="" class="medium" tabindex="3">
                      </div>
                    </li>
                  </ul>
                  
                  <ul class="gform_fields top_label description_below gform_column right-column">
                    <li id="field_1_5" class="gfield input-block">
                      <label class="gfield_label" for="input_1_5">Description</label>
                      <div class="ginput_container">
                        <textarea name="input_5" id="input_1_5" placeholder="Description" class="textarea medium" tabindex="5" rows="10" cols="50"></textarea>
                      </div>
                    </li>
                    
                    <li id="field_1_4" class="gfield input-block with-captcha">
                      <label class="gfield_label" for="input_1_4">Captcha</label>
                      <div class="gfield_captcha_container">
                        <img class="gfield_captcha" src="/images/default_blog_image_2.jpg" alt="" width="30" height="42">
                        <img class="gfield_captcha" src="/images/default_blog_image_2.jpg" alt="" width="30" height="42">
                        <img class="gfield_captcha" src="/images/default_blog_image_2.jpg" alt="" width="30" height="42">
                        <div class="gfield_captcha_input_container math_medium">
                          <input type="text" name="input_4" placeholder="Captcha" id="input_1_4" tabindex="4">
                          <input type="hidden" name="input_captcha_prefix_4" value="1127866305,1000978927,592986632">
                        </div>
                      </div>
                    </li>
                    
                    <li id="field_1_6" class="gfield file-upload-block clearfix" data-file-upload-block="">
                      <label class="gfield_label" for="input_1_6">File</label>
                      <div class="ginput_container">
                        <a href="#" class="btn-new btn-new-default btn-small btn-add" data-file-upload="">
                          <span class="fa fa-plus"></span>
                          <span class="btn-text">Add file</span>
                        </a>
                        <span class="file-name" data-file-name="">Your file name would be here when you add one</span>
                        <input type="hidden" name="MAX_FILE_SIZE" value="274726912">
                        <input name="input_6" id="input_1_6" type="file" class="medium" tabindex="6">
                      </div>
                    </li>
                    <li id="field_1_6" class="gfield file-upload-block clearfix" data-file-upload-block="">
                      <label class="gfield_label" for="input_1_6">File</label>
                      <div class="ginput_container">
                        <a href="#" class="btn-new btn-new-default btn-small btn-add" data-file-upload="">
                          <span class="fa fa-plus"></span>
                          <span class="btn-text">Add file</span>
                        </a>
                        <span class="file-name" data-file-name="">Your file name would be here when you add one</span>
                        <input type="hidden" name="MAX_FILE_SIZE" value="274726912">
                        <input name="input_6" id="input_1_6" type="file" class="medium" tabindex="6">
                      </div>
                    </li>
                    
                  </ul>
                </div>
                <div class="gform_footer top_label">
                  <input type="submit" id="gform_submit_button_1" class="btn-new btn-new-default gform_button button" value="Submit" tabindex="6" onclick="if(window[&quot;gf_submitting_1&quot;]){return false;}  window[&quot;gf_submitting_1&quot;]=true; ">
                  <input type="hidden" class="gform_hidden" name="is_submit_1" value="1">
                  <input type="hidden" class="gform_hidden" name="gform_submit" value="1">
                  <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                  <input type="hidden" class="gform_hidden" name="state_1" value="WyJbXSIsIjcxNDk2ZThjMTRiN2U4MTg4NWI2Y2Q5NGU5Y2NjNTFjIl0=">
                  <input type="hidden" class="gform_hidden" name="gform_target_page_number_1" id="gform_target_page_number_1" value="0">
                  <input type="hidden" class="gform_hidden" name="gform_source_page_number_1" id="gform_source_page_number_1" value="1">
                  <input type="hidden" name="gform_field_values" value="">
                </div>
              </form>
            </div>
            
          </div>
        </div>
        
        
      </div> <!--/Page-home-->
    </div> <!--/Wrapper-->
    
    <?php include('partials/_footer.php'); ?>
    
    <?php include('partials/_scripts.php'); ?>
  </body>
</html>

