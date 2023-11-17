<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right">logout</i></button>
            </form>
  
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pegawai">pegawai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/project">project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/worklog">worklog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/select-work">Payroll</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  
  