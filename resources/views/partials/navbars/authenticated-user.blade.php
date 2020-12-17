<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/posts/create">Create post</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" method="POST" action="/logout">
        @csrf
        <span>{{auth()->user()->name}}</span>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
      </form>