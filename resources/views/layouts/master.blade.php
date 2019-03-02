<!doctype html>
<html lang="en" >
<head>
    <title>database CRUD</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>


<body>

    <div class="container ">
    <nav class="nav navbar-inverse  ">
        <div class="container-fluid ">
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="http://127.0.0.1:8000">首頁</a>
            </div>
            <div class="collapse navbar-collapse " id="myNavbar">
                <ul class="nav navbar-nav">
                    <li> <a href="/blog/">資料庫crud</a></li>
                    <li> <a href="/blog/create">資料庫新增</a></li>
                </ul>

            </div>
        </div>
    </nav> 

    
        <div class="page-header">
        
            @yield('header')   
        
        </div>
        <div class="page-content">
            @yield('content') 
        </div>
    </div>


</body>
</html>