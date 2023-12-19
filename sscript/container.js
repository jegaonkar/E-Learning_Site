
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
$(document).ready(function () {
  // Load sidebar content dynamically
  $('#sidebarContainer').load('sidebar.html');
  $('#footerContainer').load('../footer.html');
  $('#navbarContainer').load('../navbar.html');
  // Your existing JavaScript for handling sidebar interactions goes here

  // Redirect to link on click
  $('nav a').on('click', function () {
    var link = $(this).attr('href');
    $('iframe').attr('src', link);
  });
});
