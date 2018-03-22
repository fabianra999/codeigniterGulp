<div class="container">
    <div class="row">

        <div class="col-12 col-sm-12">
            <div class="jumbotron">
                <h1 class="display-4">FORM</h1>
                <p class="lead">Form Layout.</p>
                <hr class="my-4">
            </div>
        </div>

        <div class="col-12 col-sm-6">
            <div class="card">
                <div class="card-body">

                    <form action="">
                        <div class="form__header">
                            <div class="form__header__title">
                                <h1>Default Form Layout</h1>
                            </div>
                            <div class="form__header__subtitle">
                                <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de
                                    texto.</p>
                            </div>
                        </div>
                        <div class="form__body">
                            <div class="form-group">
                                <label for="" class="form-group__label-static">First name</label>
                                <input type="text" class="form-group__input" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="First name">
                                <small class="form-group__text xs">the name is mandatory.</small>
                            </div>

                            <div class="form-group">
                                <label class="form-group__label-static" for="">Example select</label>
                                <select class="form-group__input">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <small class="form-group__text xs">the name is mandatory.</small>
                            </div>


                            <div class="form-group">
                                <label class="form-group__label-static">Example textarea</label>
                                <textarea class="form-group__input" rows="3"></textarea>
                                <small class="form-group__text xs">the name is mandatory.</small>
                            </div>


                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <small class="form-group__text xs">the name is mandatory.</small>
                                </div>
                            </div>

                        </div>
                        <div class="form__footeri">
                            <button type="button" class="btn btn-outline btn-block">Primary</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="form__header">
                            <div class="form__header__title">
                                <h1>Buttons</h1>
                            </div>
                        </div>
                        <div class="form__body">

                            <button type="button" class="btn btn-tpl1">Primary</button>
                            <button type="button" class="btn btn-outline">Primary</button>
                            <br>
                            <br>
                            <p>Button Block</p>
                            <button type="button" class="btn btn-tpl1 btn-block">Primary</button>
                            <button type="button" class="btn btn-outline btn-block">Primary</button>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <br>
                                    <p>Button Active</p>
                                    <button type="button" class="btn btn-tpl1 btn-block active">Primary</button>
                                    <button type="button" class="btn btn-outline btn-block active">Primary</button>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <br>
                                    <p>Button Disabled</p>
                                    <button type="button" class="btn btn-tpl1 btn-block" disabled>Primary</button>
                                    <button type="button" class="btn btn-outline btn-block" disabled>Primary</button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <br>
                                    <p>Button lg</p>
                                    <button type="button" class="btn btn-tpl1 btn-lg">Primary</button>
                                    <button type="button" class="btn btn-outline btn-lg">Primary</button>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <br>
                                    <p>Button sm</p>
                                    <button type="button" class="btn btn-tpl1 btn-sm">Primary</button>
                                    <button type="button" class="btn btn-outline btn-sm">Primary</button>
                                </div>
                            </div>
                        </div>
                        <div class="form__footeri">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="form__header">
                            <div class="form__header__title">
                                <h1>Button group</h1>
                            </div>
                        </div>
                        <div class="form__body">
                            <div class="row">
                                <div class="col-12 col-sm-3">

                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-secondary">1</button>
                                        <button type="button" class="btn btn-secondary">2</button>

                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 col-sm-3">

                                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                        <button type="button" class="btn btn-secondary">Button</button>
                                        <button type="button" class="btn btn-secondary">Button</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupVerticalDrop1" type="button"
                                                    class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1"
                                                 x-placement="bottom-start"
                                                 style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-secondary">Button</button>
                                        <button type="button" class="btn btn-secondary">Button</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupVerticalDrop2" type="button"
                                                    class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupVerticalDrop3" type="button"
                                                    class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupVerticalDrop4" type="button"
                                                    class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 col-sm-3">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="alert alert-primary" role="alert">
                                        This is a primary alert—check it out!
                                    </div>
                                    <div class="alert alert-secondary" role="alert">
                                        This is a secondary alert—check it out!
                                    </div>
                                    <div class="alert alert-success" role="alert">
                                        This is a success alert—check it out!
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        This is a danger alert—check it out!
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        This is a warning alert—check it out!
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        This is a info alert—check it out!
                                    </div>
                                    <div class="alert alert-light" role="alert">
                                        This is a light alert—check it out!
                                    </div>
                                    <div class="alert alert-dark" role="alert">
                                        This is a dark alert—check it out!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-12 col-sm-12">
            <div class="jumbotron">
                <h1 class="display-4">Modal</h1>
                <p class="lead">Modal Layout.</p>
                <hr class="my-4">
            </div>
        </div>
        <div class="col-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="form__header">
                            <div class="form__header__title">
                                <h1>Modal</h1>
                            </div>
                        </div>
                        <div class="form__body">
                            <div class="row">
                                <div class="col-12 col-sm-12">

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">
                                        Launch demo modal
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12">
            <div class="jumbotron">
                <h1 class="display-4">tooltip</h1>
                <p class="lead">tooltip Layout.</p>
                <hr class="my-4">
            </div>
        </div>
        <div class="col-12 col-sm-12">
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top"
                    title="Tooltip on top">
                Tooltip on top
            </button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right"
                    title="Tooltip on right">
                Tooltip on right
            </button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom"
                    title="Tooltip on bottom">
                Tooltip on bottom
            </button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left"
                    title="Tooltip on left">
                Tooltip on left
            </button>
        </div>


        <div class="col-12 col-sm-12">
            <div class="jumbotron">
                <h1 class="display-4">Clearfix</h1>
                <p class="lead">
                <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span
                                    class="na">class=</span><span class="s">"bg-info clearfix"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span
                                    class="s">"btn btn-secondary float-left"</span><span class="nt">&gt;</span>Example Button floated left<span
                                    class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span
                                    class="s">"btn btn-secondary float-right"</span><span class="nt">&gt;</span>Example Button floated right<span
                                    class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                </div>
                </p>
                <hr class="my-4">
                <div class="col-12 col-sm-12">
                    <div class="bg-info clearfix">
                        <button type="button" class="btn btn-secondary float-left">Example Button floated left</button>
                        <button type="button" class="btn btn-secondary float-right">Example Button floated right
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-sm-12">
            <div class="jumbotron">
                <h1 class="display-4">Colors</h1>
                <p class="lead">
                <div class="row">
                    <div class="col-12 col-sm-4">

                    </div>
                </div>
                </p>

                <hr class="my-4">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="text-primary">.text-primary</p>
                        <p class="text-secondary">.text-secondary</p>
                        <p class="text-success">.text-success</p>
                        <p class="text-danger">.text-danger</p>
                        <p class="text-warning">.text-warning</p>
                        <p class="text-info">.text-info</p>
                        <p class="text-light bg-dark">.text-light</p>
                        <p class="text-dark">.text-dark</p>
                        <p class="text-muted">.text-muted</p>
                        <p class="text-white bg-dark">.text-white</p>
                        <hr class="my-4">
                        <div class="highlight"><pre><code class="language-html" data-lang="html"><span
                                            class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-primary"</span><span
                                            class="nt">&gt;</span>.text-primary<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-secondary"</span><span
                                            class="nt">&gt;</span>.text-secondary<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-success"</span><span
                                            class="nt">&gt;</span>.text-success<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-danger"</span><span
                                            class="nt">&gt;</span>.text-danger<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-warning"</span><span
                                            class="nt">&gt;</span>.text-warning<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-info"</span><span
                                            class="nt">&gt;</span>.text-info<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-light bg-dark"</span><span class="nt">&gt;</span>.text-light<span
                                            class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-dark"</span><span
                                            class="nt">&gt;</span>.text-dark<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-muted"</span><span
                                            class="nt">&gt;</span>.text-muted<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-white bg-dark"</span><span class="nt">&gt;</span>.text-white<span
                                            class="nt">&lt;/p&gt;</span></code></pre>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
                        <div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
                        <div class="p-3 mb-2 bg-success text-white">.bg-success</div>
                        <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
                        <div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
                        <div class="p-3 mb-2 bg-info text-white">.bg-info</div>
                        <div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
                        <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
                        <div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
                        <hr class="my-4">
                        <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span
                                            class="na">class=</span><span
                                            class="s">"p-3 mb-2 bg-primary text-white"</span><span
                                            class="nt">&gt;</span>.bg-primary<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span
                                            class="s">"p-3 mb-2 bg-secondary text-white"</span><span
                                            class="nt">&gt;</span>.bg-secondary<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span
                                            class="s">"p-3 mb-2 bg-success text-white"</span><span
                                            class="nt">&gt;</span>.bg-success<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span
                                            class="s">"p-3 mb-2 bg-danger text-white"</span><span class="nt">&gt;</span>.bg-danger<span
                                            class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span
                                            class="s">"p-3 mb-2 bg-warning text-dark"</span><span class="nt">&gt;</span>.bg-warning<span
                                            class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-3 mb-2 bg-info text-white"</span><span
                                            class="nt">&gt;</span>.bg-info<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-3 mb-2 bg-light text-dark"</span><span
                                            class="nt">&gt;</span>.bg-light<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-3 mb-2 bg-dark text-white"</span><span
                                            class="nt">&gt;</span>.bg-dark<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-3 mb-2 bg-white text-dark"</span><span
                                            class="nt">&gt;</span>.bg-white<span
                                            class="nt">&lt;/div&gt;</span></code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-sm-12">
            <div class="jumbotron">
                <h1 class="display-4">Display</h1>
                <p class="lead">
                <div class="row">
                    <div class="col-12 col-sm-4">

                    </div>
                </div>
                </p>

                <hr class="my-4">
                <div class="row">
                    <div class="col-12 col-sm-6">

                        <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span
                                            class="na">class=</span><span
                                            class="s">"d-inline p-2 bg-primary text-white"</span><span
                                            class="nt">&gt;</span>d-inline<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span
                                            class="s">"d-inline p-2 bg-dark text-white"</span><span
                                            class="nt">&gt;</span>d-inline<span
                                            class="nt">&lt;/div&gt;</span></code></pre>
                        </div>

                        <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span
                                            class="na">class=</span><span
                                            class="s">"d-block p-2 bg-primary text-white"</span><span
                                            class="nt">&gt;</span>d-block<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span
                                            class="s">"d-block p-2 bg-dark text-white"</span><span
                                            class="nt">&gt;</span>d-block<span
                                            class="nt">&lt;/span&gt;</span></code></pre>
                        </div>

                        <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span
                                            class="na">class=</span><span class="s">"d-lg-none"</span><span class="nt">&gt;</span>hide on screens wider than lg<span
                                            class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-none d-lg-block"</span><span
                                            class="nt">&gt;</span>hide on screens smaller than lg<span class="nt">&lt;/div&gt;</span></code></pre>
                        </div>

                        <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span
                                            class="na">class=</span><span class="s">"d-print-none"</span><span
                                            class="nt">&gt;</span>Screen Only (Hide on print only)<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-none d-print-block"</span><span
                                            class="nt">&gt;</span>Print Only (Hide on screen only)<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span
                                            class="s">"d-none d-lg-block d-print-block"</span><span
                                            class="nt">&gt;</span>Hide up to large on screen, but always show on print<span
                                            class="nt">&lt;/div&gt;</span></code></pre>
                        </div>


                    </div>
                    <div class="col-12 col-sm-6">
                        <table>
                            <thead>
                            <tr>
                                <th>Screen Size</th>
                                <th>Class</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Hidden on all</td>
                                <td><code class="highlighter-rouge">.d-none</code></td>
                            </tr>
                            <tr>
                                <td>Hidden only on xs</td>
                                <td><code class="highlighter-rouge">.d-none .d-sm-block</code></td>
                            </tr>
                            <tr>
                                <td>Hidden only on sm</td>
                                <td><code class="highlighter-rouge">.d-sm-none .d-md-block</code></td>
                            </tr>
                            <tr>
                                <td>Hidden only on md</td>
                                <td><code class="highlighter-rouge">.d-md-none .d-lg-block</code></td>
                            </tr>
                            <tr>
                                <td>Hidden only on lg</td>
                                <td><code class="highlighter-rouge">.d-lg-none .d-xl-block</code></td>
                            </tr>
                            <tr>
                                <td>Hidden only on xl</td>
                                <td><code class="highlighter-rouge">.d-xl-none</code></td>
                            </tr>
                            <tr>
                                <td>Visible on all</td>
                                <td><code class="highlighter-rouge">.d-block</code></td>
                            </tr>
                            <tr>
                                <td>Visible only on xs</td>
                                <td><code class="highlighter-rouge">.d-block .d-sm-none</code></td>
                            </tr>
                            <tr>
                                <td>Visible only on sm</td>
                                <td><code class="highlighter-rouge">.d-none .d-sm-block .d-md-none</code></td>
                            </tr>
                            <tr>
                                <td>Visible only on md</td>
                                <td><code class="highlighter-rouge">.d-none .d-md-block .d-lg-none</code></td>
                            </tr>
                            <tr>
                                <td>Visible only on lg</td>
                                <td><code class="highlighter-rouge">.d-none .d-lg-block .d-xl-none</code></td>
                            </tr>
                            <tr>
                                <td>Visible only on xl</td>
                                <td><code class="highlighter-rouge">.d-none .d-xl-block</code></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
