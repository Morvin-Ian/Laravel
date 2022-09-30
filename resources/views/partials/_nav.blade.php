<ul>
    @auth
        <li><a href="/"><i class="fas fa-user"></i> {{auth()->user()->name}} </a> </li>
        <li> <a href="/jobs/manage"><i class="fa-solid fa-gear"></i>  Manage Gigs</a>  </li>
        <li> <a href="/logout"><i class="fa-solid fa-gear"></i>  Logout</a>  </li>
    @else
        <li><a href="/register"><i class="fas fa-user"></i>  Register </a> </li>
        <li> <a href="/login"><i class="fas fa-arrow-right"></i>  Login</a>  </li>
    @endauth

</ul>

<style>
    ul{
        display: flex;
        position: absolute;
        left: 70%;
        top:5%;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
    }
    li{
        list-style: none;
    
    }
    ul li a{
        text-decoration: none;
        margin: 20px;
        color: black;
    }

    ul li a:hover{
        color: black;
    }

    p{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
    }
</style>