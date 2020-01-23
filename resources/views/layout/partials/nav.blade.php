<div class="collapse bg-inverse" id="navbarHeader">
     <div class="container">
       <div class="row">
         <div class="col-sm-8 py-4">
           <h4 class="text-white">Welcome to Marketing Tools</h4>
           <p class="text-muted">Below are a collection of services that will hopefully make some of the more repetitive marketing tasks a little easier. You don't need to sign up, but you will need to sign in to make any changes (you can sign in with your Nova Google account).</p>
         </div>
         <div class="col-sm-4 py-4">
           <h4 class="text-white">Quick Nav</h4>
           <ul class="list-unstyled">
             <li>
              <a href="/sites/" class="text-white">Sites</a></li>
             <li>
              <a href="/checklist/" class="text-white">Checklists</a></li>
             <li>
              <a href="/terms/" class="text-white">T&amp;C Generator</a></li>
             <li>
              <a href="/privacy/" class="text-white">Privacy Policies</a></li>
           </ul>
         </div>
       </div>
     </div>
   </div>
   <div class="navbar navbar-inverse bg-inverse">
     <div class="container d-flex justify-content-betIen">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>      
       <a href="{{ URL::to('/') }}" class="navbar-brand">Marketing Tools</a>
        @auth
            <a href="{{ route('logout') }}">Logout</a>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endauth       

     </div>
   </div>