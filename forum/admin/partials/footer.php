 <!-- footer -->


 <div class="container-fluid text-white" style="background-color: #43B929;" >
  

  <div class="row " style="text-align:;">
    <div class="col-md-1"></div>
    <div class="col-sm-4 copyright position-relative">
      <hr>
      <p class="lead"><small class=" text-white">© 2023. All Rights Reserved. CeDReCS - Forum</small></p>
    </div>

  </div>
  

</div>


<script>
function goBack() {
  window.history.back();
}

$('.btn-back').on('click', goBack);
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const passwordField = document.getElementById("password");
        const eyeIcon = document.getElementById("eyeIcon");

        document.getElementById("togglePassword").addEventListener("click", function () {
            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.classList.remove("bi-eye");
                eyeIcon.classList.add("bi-eye-slash");
            } else {
                passwordField.type = "password";
                eyeIcon.classList.remove("bi-eye-slash");
                eyeIcon.classList.add("bi-eye");
            }
        });
    });
</script>
</body>

</html>
