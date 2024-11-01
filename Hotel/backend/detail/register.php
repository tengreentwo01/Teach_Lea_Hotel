<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Create Account</h3>
                    </div>
                    <div class="card-body">
                        <form action="../control/register.php" method="POST" onsubmit="return confirmSubmission();">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputFullName" type="text" name="name" placeholder="Enter your full name" required />
                                <label for="inputFullName">Full Name</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="username" type="text" name="username" placeholder="Username Membe" required />
                                <label for="username">Username Member</label>
                            </div>
 
                                    <div class="form-floating">
                                        <input class="form-control" id="inputPassword" type="password" name="passing" placeholder="Create a password" required />
                                        <label for="inputPassword">Password</label>


                            
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input class="btn btn-primary btn-block" type="submit" value="Create Account">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function confirmSubmission() {
        const input_name = document.querySelector('input[name="name"]').value;
        const input_username = document.querySelector('input[name="username"]').value;

        // Alert without displaying the password for security reasons
        alert(`Full Name: ${input_name}\n\nData to be submitted:\nUsername: ${input_username}`);

        return true; // Return true to submit the form
    }
</script>
