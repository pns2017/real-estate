<div class="parlex-back" ng-controller="contactus" ng-app="pns">
    <div class="container">
      <div class="row">
        <div class="heading text-center"> 
          <!-- Heading -->
          <h2>Contact Us</h2>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
        </div>
      </div>
      <div class="row mrgn30">
        <form>
          <div class="col-sm-12">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" ng-model="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" ng-model="email" placeholder="Enter email" title="Please enter a valid email address">
            </div>
            <div class="form-group">
              <label for="comments">Message</label>
              <textarea name="comment" class="form-control" id="comments" cols="15" rows="5" ng-model="message" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
              <button name="submit" type="submit" ng-click="sendMail()" class="btn btn-lg btn-primary" id="submit">Submit</button>
            </div>
            <div class="result"></div>
          </div>
        </form>
      </div>
       
    </div>
    </div>  
    </div>
    <!--/.container--> 

  </div>
