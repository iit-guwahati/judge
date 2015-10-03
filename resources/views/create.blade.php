<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        

        <div class="container">
            
            <div class="row">
               
                <div class="col-lg-6" >
                    <div class="page-header">
                        <h1>Registration</h1>
                    
                    </div>
                    <form role="form"  method="POST" action="{{ route('user.store') }}"style="margin-bottom:5vh">
                        
                        <div class="form-group">
                            <label for="InputName">Enter Name**</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                                <span class="input-group-addon"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">Enter Email**</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required>
                                <span class="input-group-addon"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputPassword">Enter Password**</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="InputPassword" name="InputPassword" placeholder="Enter Password" required>
                                <span class="input-group-addon"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputRepassword">Re-Enter Password**</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="InputRepassword" name="InputRepassword" placeholder="Re-enter Password" required>
                                <span class="input-group-addon"></span></span>
                            </div>
                        </div>
                        
                        
                        <input type="submit" name="submit" id="submit" value="Sign Up" class="btn btn-info pull-right">
                        
                    </form> 
                     <br><br>
                    

                    <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div> 
                </div>
                <div class="col-lg-6" >
                    <div class="page-header">
                        <h1>Sign In</h1>
                    
                    </div>
                    <form role="form" method="POST" action="{{ route('auth') }}" style="margin-bottom:5vh">
                        
                        
                        <div class="form-group">
                            <label for="InputEmail">Email**</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="LoginEmail" name="LoginEmail" placeholder="Enter Email" required>
                                <span class="input-group-addon"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputPassword">Password**</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="LoginPassword" name="LoginPassword" placeholder="Enter Password" required>
                                <span class="input-group-addon"></span></span>
                            </div>
                        </div>
                        
                        
                        
                        <input type="submit" name="Login" id="login" value="Login" class="btn btn-info pull-right">
                        
                    </form> 
                     
                    <br><br>

                    <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div> 
                </div>
            </div>
        </div>
    </body>
</html>
