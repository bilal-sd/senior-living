<h1>user deshboard</h1>

 <a class="dropdown-ur list-group-item" href="javascript:void(0);"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                            class="far fa-sign-out-alt"></i> Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>