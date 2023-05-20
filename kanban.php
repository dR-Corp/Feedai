<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<!-- head -->
<?php include('head.php') ?>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
            }
            </script>

            <?php include('sidebar.php') ?>

            <div class="content">

                <?php include('header.php') ?>

                <div class="row mb-3 gx-0 kanban-header rounded-2 px-card py-2 mt-2 mb-3">
                    <div class="col d-flex align-items-center">
                        <h5 class="mb-0">Tâches</h5>
                        <button class="btn btn-sm btn-falcon-default ms-3"><span class="far fa-star"></span></button>
                        <div class="vertical-line vertical-line-400 position-relative h-100 mx-3"></div>
                            <ul class="nav avatar-group mb-0 d-none d-md-flex">
                                <li class="nav-item dropdown"></li>
                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none" href="#" role="button" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-l">
                                    <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />

                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                    <div class="d-flex align-items-center position-relative px-3">
                                    <div class="avatar avatar-2xl me-2">
                                        <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />

                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">Anna Karinina</a></h6>
                                        <p class="mb-0 fs--2">Member</p>
                                    </div>
                                    </div>
                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                </div>
                                </li>
                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-l">
                                    <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />

                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                    <div class="d-flex align-items-center position-relative px-3">
                                    <div class="avatar avatar-2xl me-2">
                                        <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />

                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">Antony Hopkins</a></h6>
                                        <p class="mb-0 fs--2">Member</p>
                                    </div>
                                    </div>
                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                </div>
                                </li>
                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-l">
                                    <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                    <div class="d-flex align-items-center position-relative px-3">
                                    <div class="avatar avatar-2xl me-2">
                                        <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">Rowan Atkinson</a></h6>
                                        <p class="mb-0 fs--2">Member</p>
                                    </div>
                                    </div>
                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                </div>
                                </li>
                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-l">
                                    <img class="rounded-circle" src="assets/img/team/4.jpg" alt="" />

                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                    <div class="d-flex align-items-center position-relative px-3">
                                    <div class="avatar avatar-2xl me-2">
                                        <img class="rounded-circle" src="assets/img/team/4.jpg" alt="" />

                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">John Doe</a></h6>
                                        <p class="mb-0 fs--2">Member</p>
                                    </div>
                                    </div>
                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                </div>
                                </li>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-caret-none p-0 ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-l">
                                    <div class="avatar-name rounded-circle avatar-button"><span>2+</span></div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-md">
                                    <h6 class="dropdown-header py-0 px-3 mb-0">Board Members</h6>
                                    <div class="dropdown-divider"></div>
                                    <div class="d-flex px-3"><a class="me-2" href="pages/user/profile.html" data-bs-toggle="tooltip" title="Anna Karinina">
                                        <div class="avatar avatar-xl">
                                        <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />

                                        </div>
                                    </a><a class="me-2" href="pages/user/profile.html" data-bs-toggle="tooltip" title="Antony Hopkins">
                                        <div class="avatar avatar-xl">
                                        <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />

                                        </div>
                                    </a><a class="me-2" href="pages/user/profile.html" data-bs-toggle="tooltip" title="Rowan Atkinson">
                                        <div class="avatar avatar-xl">
                                        <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                                        </div>
                                    </a><a class="me-2" href="pages/user/profile.html" data-bs-toggle="tooltip" title="John Doe">
                                        <div class="avatar avatar-xl">
                                        <img class="rounded-circle" src="assets/img/team/4.jpg" alt="" />

                                        </div>
                                    </a><a class="me-2" href="pages/user/profile.html" data-bs-toggle="tooltip" title="Emily Rose">
                                        <div class="avatar avatar-xl">
                                        <img class="rounded-circle" src="assets/img/team/5.jpg" alt="" />

                                        </div>
                                    </a><a href="pages/user/profile.html" data-bs-toggle="tooltip" title="Marry Jane">
                                        <div class="avatar avatar-xl">
                                        <img class="rounded-circle" src="assets/img/team/6.jpg" alt="" />

                                        </div>
                                    </a>
                                    </div>
                                </div>
                                </li>
                            </ul>
                        <div class="vertical-line vertical-line-400 position-relative h-100 mx-3 d-none d-md-flex"></div>
                            <div class="position-relative">
                                <button class="btn btn-sm btn-falcon-default dropdown-toggle dropdown-caret-none" id="invitePeople" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-plus me-2"></span>Invite</button>
                                <div class="dropdown-menu dropdown-menu-end pt-2 pb-0" aria-labelledby="invitePeople" style="min-width: 300px;">
                                <h6 class="dropdown-header text-center text-uppercase py-1 fs--2 ls fw-semi-bold">Invite To Board</h6>
                                <div class="dropdown-divider mb-0"></div>
                                <div class="p-3">
                                    <form>
                                    <div class="border rounded-1 fs--2 mb-3">
                                        <div class="d-flex flex-between-center border-bottom bg-200">
                                        <div class="px-2 text-700">Anyone with the link can join</div>
                                        <div class="border-start">
                                            <button class="btn btn-link btn-sm text-decoration-none hover-300 rounded-0 fs--2" id="dataCopy" type="button" data-copy="#invite-link" data-bs-toggle="tooltip" data-bs-trigger="manual" title="Copy to clipboard"> <span class="far fa-copy me-2"></span>Copy link</button>
                                        </div>
                                        </div>
                                        <input class="form-control bg-white dark__bg-dark border-0 fs--2 px-1 rounded-top-0" id="invite-link" type="text" readonly="readonly" value="https://prium.github.io/falcon/kanban/QhNCShh8TdxKx0kYN1oWzzKJDjOYUXhm9IJ035laUVdWMYsUN5" />
                                    </div>
                                    <input class="form-control form-control-sm" type="text" placeholder="Enter name or email" />
                                    <button class="btn btn-primary btn-sm d-block w-100 mt-2" type="button">Send Invitation</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto d-flex align-items-center">
                            <button class="btn btn-sm btn-falcon-default me-2 d-none d-md-block"><span class="fas fa-plus me-2"></span>Add tâche</button>
                            <div class="dropdown font-sans-serif">
                                <button class="btn btn-sm btn-falcon-default dropdown-toggle dropdown-caret-none" type="button" id="kanbanMenu" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="kanbanMenu"><a class="dropdown-item" href="#!">Copier le lien</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Supprimer </a>
                                </div>
                            </div>
                    </div>
                   
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-lg-12 mb-4 mb-lg-0">
                        
                        <div class="kanban-container scrollbar me-n3">
                        
                            <div class="kanban-column" style="width:auto">
                                <div class="kanban-column-header">
                                    <h5 class="fs-0 mb-0">Tâches <span class="text-500">(4)</span></h5>
                                    <div class="dropdown font-sans-serif btn-reveal-trigger">
                                        <button class="btn btn-sm btn-reveal py-0 px-2" type="button" id="kanbanColumn1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="kanbanColumn1"><a class="dropdown-item" href="#!">Add Card</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Copy link</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="kanban-items-container scrollbar">
                                    <div class="kanban-item">
                                    <div class="card kanban-item-card hover-actions-trigger">
                                        <div class="card-body">
                                        <div class="position-relative">
                                            <div class="dropdown font-sans-serif">
                                            <button class="btn btn-sm btn-falcon-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-0"><a class="dropdown-item" href="#!">Add Card</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Copy link</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                            </div>
                                        </div>
                                        <p class="mb-0 fw-medium font-sans-serif stretched-link" data-bs-toggle="modal" data-bs-target="#kanban-modal-1">Add a cookie notice, which will be shown at the bottom of the page and has a link of "Privacy Policy"</p>
                                        <div class="kanban-item-footer cursor-default">
                                            <div class="text-500 z-index-2"><span class="me-2" data-bs-toggle="tooltip" title="You're assigned in this card"><span class="fas fa-eye"></span></span><span class="me-2" data-bs-toggle="tooltip" title="Checklist"><span class="fas fa-check me-1"></span><span>3/6</span></span>
                                            </div>
                                            <div class="z-index-2">
                                            <div class="avatar avatar-l align-top ms-n2" data-bs-toggle="tooltip" title="Emma">
                                                <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="kanban-item">
                                    <div class="card kanban-item-card hover-actions-trigger">
                                        <div class="position-relative rounded-top-lg overflow-hidden py-8">
                                        <div class="bg-holder" style="background-image:url(assets/img/kanban/2.jpg);">
                                        </div>
                                        <!--/.bg-holder-->

                                        </div>
                                        <div class="card-body">
                                        <div class="position-relative">
                                            <div class="dropdown font-sans-serif">
                                            <button class="btn btn-sm btn-falcon-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-0"><a class="dropdown-item" href="#!">Add Card</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Copy link</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                            </div>
                                        </div>
                                        <p class="mb-0 fw-medium font-sans-serif stretched-link" data-bs-toggle="modal" data-bs-target="#kanban-modal-3">Add a pdf file that describes all the symptoms of COVID-19</p>
                                        <div class="kanban-item-footer cursor-default">
                                            <div class="text-500 z-index-2"><span class="me-2" data-bs-toggle="tooltip" title="Attachments"><span class="fas fa-paperclip me-1"></span><span>1</span></span>
                                            </div>
                                            <div class="z-index-2">
                                            <div class="avatar avatar-l align-top ms-n2" data-bs-toggle="tooltip" title="Shophie">
                                                <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                                            </div>
                                            <div class="avatar avatar-l align-top ms-n2" data-bs-toggle="tooltip" title="Rowan">
                                                <img class="rounded-circle" src="assets/img/team/4.jpg" alt="" />

                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="kanban-item">
                                    <div class="card kanban-item-card hover-actions-trigger">
                                        <div class="card-body">
                                        <div class="position-relative">
                                            <div class="dropdown font-sans-serif">
                                            <button class="btn btn-sm btn-falcon-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-0"><a class="dropdown-item" href="#!">Add Card</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Copy link</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="mb-2"><span class="badge py-1 me-1 mb-1 badge-soft-success">New</span><span class="badge py-1 me-1 mb-1 badge-soft-primary">Goal</span>
                                        </div>
                                        <p class="mb-0 fw-medium font-sans-serif stretched-link" data-bs-toggle="modal" data-bs-target="#kanban-modal-1">Make a Registration form that includes Name, Email, and a Password input field</p>
                                        <div class="kanban-item-footer cursor-default">
                                            <div class="text-500 z-index-2"><span class="me-2" data-bs-toggle="tooltip" title="Attachments"><span class="fas fa-paperclip me-1"></span><span>1</span></span><span class="me-2" data-bs-toggle="tooltip" title="Checklist"><span class="fas fa-check me-1"></span><span>2/10</span></span>
                                            </div>
                                            <div class="z-index-2">
                                            <div class="avatar avatar-l align-top ms-n2" data-bs-toggle="tooltip" title="Shophie">
                                                <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="kanban-item">
                                    <div class="card kanban-item-card hover-actions-trigger">
                                        <div class="card-body">
                                        <div class="position-relative">
                                            <div class="dropdown font-sans-serif">
                                            <button class="btn btn-sm btn-falcon-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-0"><a class="dropdown-item" href="#!">Add Card</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Copy link</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="mb-2"><span class="badge py-1 me-1 mb-1 badge-soft-info">Enhancement</span>
                                        </div>
                                        <p class="mb-0 fw-medium font-sans-serif stretched-link" data-bs-toggle="modal" data-bs-target="#kanban-modal-1">Update profile page layout with cover image and user setting menu</p>
                                        <div class="kanban-item-footer cursor-default">
                                            <div class="text-500 z-index-2"><span class="me-2" data-bs-toggle="tooltip" title="You're assigned in this card"><span class="fas fa-eye"></span></span><span class="me-2" data-bs-toggle="tooltip" title="Attachments"><span class="fas fa-paperclip me-1"></span><span>1</span></span>
                                            </div>
                                            <div class="z-index-2">
                                            <div class="avatar avatar-l align-top ms-n2" data-bs-toggle="tooltip" title="Emma">
                                                <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />

                                            </div>
                                            <div class="avatar avatar-l align-top ms-n2" data-bs-toggle="tooltip" title="Antony">
                                                <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />

                                            </div>
                                            <div class="avatar avatar-l align-top ms-n2" data-bs-toggle="tooltip" title="Anna">
                                                <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <form class="add-card-form mt-3">
                                    <textarea class="form-control" data-input="add-card" rows="2" placeholder="Enter a title for this card..."></textarea>
                                    <div class="row gx-2 mt-2">
                                        <div class="col">
                                        <button class="btn btn-primary btn-sm d-block w-100" type="button">Add</button>
                                        </div>
                                        <div class="col">
                                        <button class="btn btn-outline-secondary btn-sm d-block w-100 border-400" type="button" data-btn-form="hide">Cancel</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="kanban-column-footer">
                                    <button class="btn btn-link btn-sm d-block w-100 btn-add-card text-decoration-none text-600" type="button"><span class="fas fa-plus me-2"></span>Add another card</button>
                                </div>
                            </div>
                        
                            <div class="kanban-column">
                                <div class="collapse bg-100 p-card rounded-lg transition-none" id="addListForm">
                                    <form>
                                    <textarea class="form-control mb-2" data-input="add-list" rows="2" placeholder="Enter list title..."></textarea>
                                    <div class="row gx-2">
                                        <div class="col">
                                        <button class="btn btn-primary btn-sm d-block w-100" type="button">Add</button>
                                        </div>
                                        <div class="col">
                                        <button class="btn btn-outline-secondary btn-sm d-block w-100 border-400" type="button" data-dismiss="collapse">Cancel</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <!-- <button class="btn d-block col-sm-3 btn-secondary bg-400 border-400 bg-dark" data-bs-toggle="collapse" data-bs-target="#addListForm" aria-expanded="false" aria-controls="addListForm"><span class="fas fa-plus me-1"> </span>Ajouter une tâche</button> -->
                            </div>
                        </div>
                        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
                            <div class="modal-dialog mt-6" role="document">
                                <div class="modal-content border-0">
                                <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                                    <div class="position-relative z-index-1 light">
                                    <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                                    <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                                    </div>
                                    <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body py-4 px-5">
                                    <form>
                                    <div class="mb-3">
                                        <label class="form-label" for="modal-auth-name">Name</label>
                                        <input class="form-control" type="text" autocomplete="on" id="modal-auth-name" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="modal-auth-email">Email address</label>
                                        <input class="form-control" type="email" autocomplete="on" id="modal-auth-email" />
                                    </div>
                                    <div class="row gx-2">
                                        <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="modal-auth-password">Password</label>
                                        <input class="form-control" type="password" autocomplete="on" id="modal-auth-password" />
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="modal-auth-confirm-password">Confirm Password</label>
                                        <input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" />
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" />
                                        <label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button>
                                    </div>
                                    </form>
                                    <div class="position-relative mt-5">
                                    <hr class="bg-300" />
                                    <div class="divider-content-center">or register with</div>
                                    </div>
                                    <div class="row g-2 mt-2">
                                    <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                                    <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="kanban-modal-label-1" aria-hidden="true" id="kanban-modal-1">
                            <div class="modal-dialog modal-lg mt-6" role="document">
                                <div class="modal-content border-0">
                                <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
                                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                                    <h4 class="mb-1" id="kanban-modal-label-1">Add a new illustration to the landing page</h4>
                                    <p class="fs--2 mb-0">Added by <a class="link-600 fw-semi-bold" href="#!">Antony</a></p>
                                    </div>
                                    <div class="p-4">
                                    <div class="row">
                                        <div class="col-lg-9">
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-user" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-2 fs-0">Membres</h5>
                                            <ul class="nav avatar-group mb-0">
                                                <li class="nav-item dropdown"></li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">Anna Karinina</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">Antony Hopkins</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">Rowan Atkinson</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="assets/img/team/4.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="assets/img/team/4.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">John Doe</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="assets/img/team/5.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="assets/img/team/5.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">Emily Rose</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="../assets/img/team/6.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="../assets/img/team/6.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="../pages/user/profile.html">Marry Jane</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-caret-none p-0 ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <div class="avatar-name rounded-circle avatar-button"><span><span class="fas fa-plus" data-fa-trasnsform="grow-2"></span></span></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md" data-list='{"valueNames":["name"]}'>
                                                    <h6 class="dropdown-header py-0 px-3 mb-0">Select Member</h6>
                                                    <div class="dropdown-divider"></div>
                                                    <form class="px-3 mb-2">
                                                    <input class="form-control form-control-sm search" type="text" placeholder="Search team member" />
                                                    </form>
                                                    <ul class="list-unstyled list">
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">Anna Karinina</h6>
                                                        </div>
                                                        </a></li>
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">Antony Hopkins</h6>
                                                        </div>
                                                        </a></li>
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">Rowan Atkinson</h6>
                                                        </div>
                                                        </a></li>
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">John Doe</h6>
                                                        </div>
                                                        </a></li>
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">Emily Rose</h6>
                                                        </div>
                                                        </a></li>
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/6.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">Marry Jane</h6>
                                                        </div>
                                                        </a></li>
                                                    </ul>
                                                </div>
                                                </li>
                                            </ul>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-tag" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-2 fs-0">Status</h5>
                                            <div class="d-flex">
                                                <span class="badge me-1 py-2 badge-soft-success">Terminé</span>
                                                <span class="badge me-1 py-2 badge-soft-primary">Pas commencé</span>
                                                <span class="badge me-1 py-2 badge-soft-info">En cours</span>
                                            </div>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-tag" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-2 fs-0">Echéance</h5>
                                            <div class="d-flex">
                                                <span class="badge me-1 py-2 badge-soft-success">05/03/2023</span>
                                                
                                            </div>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-align-left" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-2 fs-0">Dernière modification</h5>
                                            <p class="text-word-break fs--1">The illustration must match to the contrast of the theme. The illustraion must described the concept of the design. To know more about the theme visit the page. <a href="https://prium.github.io/falcon/v3.4.0/index.html" target="_blank">https://prium.github.io/falcon/v3.4.0/index.html</a></p>
                                            <form>
                                                <textarea class="form-control border-0 rounded-bottom-0 resize-none" rows="3" contentEditable="true"></textarea>
                                                <div class="d-flex flex-between-center bg-light rounded-bottom p-2 mt-1">
                                                    <button class="btn btn-sm btn-primary" type="submit">Save</button>
                                                    <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-paperclip"></span></a></li>
                                                    <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-at"></span></a></li>
                                                    <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-image"></span></a></li>
                                                    </ul>
                                                </div>
                                            </form>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"> <span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-paperclip" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <div class="d-flex justify-content-between mb-2">
                                                <h5 class="mb-0 fs-0">Attachments</h5>
                                                <div class="dropdown">
                                                <button class="btn btn-falcon-default btn-sm dropdown-toggle dropdown-caret-none fs--2" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="fas fa-plus"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#!">Computer</a><a class="dropdown-item" href="#!">Google Drive</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Attach Link</a>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-3"><a class="text-decoration-none me-3" href="../assets/img/kanban/3.jpg" data-gallery="attachment-bg">
                                                <div class="bg-attachment">
                                                    <div class="bg-holder rounded" style="background-image:url(../assets/img/kanban/3.jpg);">
                                                    </div>
                                                    <!--/.bg-holder-->

                                                </div>
                                                </a>
                                                <div class="flex-1 fs--2">
                                                <h6 class="mb-1"> <a class="text-decoration-none" href="../assets/img/kanban/3.jpg" data-gallery="attachment-title">final-img.jpg</a>
                                                </h6><a class="link-600 fw-semi-bold" href="#!">Edit</a><span class="mx-1">|</span><a class="link-600 fw-semi-bold" href="#!">Remove</a>
                                                <p class="mb-0">Uploaded at 2020-04-18 5:25 pm</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-3"><a class="text-decoration-none me-3" href="../assets/img/kanban/4.jpg" data-gallery="attachment-bg">
                                                <div class="bg-attachment">
                                                    <div class="bg-holder rounded" style="background-image:url(../assets/img/kanban/4.jpg);">
                                                    </div>
                                                    <!--/.bg-holder-->

                                                </div>
                                                </a>
                                                <div class="flex-1 fs--2">
                                                <h6 class="mb-1"> <a class="text-decoration-none" href="../assets/img/kanban/4.jpg" data-gallery="attachment-title">picture.png</a>
                                                </h6><a class="link-600 fw-semi-bold" href="#!">Edit</a><span class="mx-1">|</span><a class="link-600 fw-semi-bold" href="#!">Remove</a>
                                                <p class="mb-0">Uploaded at 2020-04-20 4:34 pm</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-3"><a class="text-decoration-none me-3" href="#!">
                                                <div class="bg-attachment"><span class="text-uppercase fw-bold">txt</span>
                                                </div>
                                                </a>
                                                <div class="flex-1 fs--2">
                                                <h6 class="mb-1"> <a class="text-decoration-none" href="#!">sample.txt</a>
                                                </h6><a class="link-600 fw-semi-bold" href="#!">Edit</a><span class="mx-1">|</span><a class="link-600 fw-semi-bold" href="#!">Remove</a>
                                                <p class="mb-0">Uploaded at 2020-04-21 2:10 pm</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-3"><a class="text-decoration-none me-3" href="#!">
                                                <div class="bg-attachment"><span class="text-uppercase fw-bold">pdf</span>
                                                </div>
                                                </a>
                                                <div class="flex-1 fs--2">
                                                <h6 class="mb-1"> <a class="text-decoration-none" href="#!">example.pdf</a>
                                                </h6><a class="link-600 fw-semi-bold" href="#!">Edit</a><span class="mx-1">|</span><a class="link-600 fw-semi-bold" href="#!">Remove</a>
                                                <p class="mb-0">Uploaded at 2020-05-02 11:34 am</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center"><a class="text-decoration-none me-3" href="../assets/video/beach.mp4" data-gallery="attachment-bg">
                                                <div class="bg-attachment">
                                                    <div class="bg-holder rounded" style="background-image:url(../assets/video/beach.jpg);">
                                                    </div>
                                                    <!--/.bg-holder-->

                                                    <div class="icon-play"><span class="fas fa-play"></span></div>
                                                </div>
                                                </a>
                                                <div class="flex-1 fs--2">
                                                <h6 class="mb-1"> <a class="text-decoration-none" href="../assets/video/beach.mp4" data-gallery="attachment-title">beach.mp4</a>
                                                </h6><a class="link-600 fw-semi-bold" href="#!">Edit</a><span class="mx-1">|</span><a class="link-600 fw-semi-bold" href="#!">Remove</a>
                                                <p class="mb-0">Uploaded at 2020-05-10 3:40 pm</p>
                                                </div>
                                            </div>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary far fa-comment" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-3 fs-0">Comments</h5>
                                            <div class="d-flex">
                                                <div class="avatar avatar-l me-2">
                                                <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />

                                                </div>
                                                <div class="flex-1 fs--1">
                                                <div class="position-relative border rounded-1 mb-3">
                                                    <form>
                                                    <textarea class="form-control border-0 rounded-bottom-0 resize-none" rows="3" contentEditable="true"></textarea>
                                                    <div class="d-flex flex-between-center bg-light rounded-bottom p-2 mt-1">
                                                        <button class="btn btn-sm btn-primary" type="submit">Save</button>
                                                        <ul class="list-inline mb-0">
                                                        <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-paperclip"></span></a></li>
                                                        <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-at"></span></a></li>
                                                        <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-image"></span></a></li>
                                                        </ul>
                                                    </div>
                                                    </form>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3"><a href="../pages/user/profile.html">
                                                <div class="avatar avatar-l">
                                                    <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />

                                                </div>
                                                </a>
                                                <div class="flex-1 ms-2 fs--1">
                                                <p class="mb-1 bg-200 rounded-3 p-2"><a class="fw-semi-bold" href="../pages/user/profile.html">Rowan </a>This time we should finish the task before the deadline</p><a href="#!">Like</a> &bull; <a href="#!">Reply</a> &bull; 23min
                                                </div>
                                            </div>
                                            <div class="d-flex"><a href="../pages/user/profile.html">
                                                <div class="avatar avatar-l">
                                                    <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />

                                                </div>
                                                </a>
                                                <div class="flex-1 ms-2 fs--1">
                                                <p class="mb-1 bg-200 rounded-3 p-2"><a class="fw-semi-bold" href="../pages/user/profile.html">Emma </a>We have more task to do</p><a href="#!">Like</a> &bull; <a href="#!">Reply</a> &bull; 2hour
                                                </div>
                                            </div>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-list-ul" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-3 fs-0">Activity </h5>
                                            <div class="d-flex mb-3"><a href="../pages/user/profile.html">
                                                <div class="avatar avatar-l">
                                                    <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />

                                                </div>
                                                </a>
                                                <div class="flex-1 ms-2 fs--1">
                                                <p class="mb-0"><a class="fw-semi-bold" href="../pages/user/profile.html">Rowan </a>Added the card</p>
                                                <div class="fs--2">6 hours ago</div>
                                                </div>
                                            </div>
                                            <div class="d-flex"><a href="../pages/user/profile.html">
                                                <div class="avatar avatar-l">
                                                    <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />

                                                </div>
                                                </a>
                                                <div class="flex-1 ms-2 fs--1">
                                                <p class="mb-0"><a class="fw-semi-bold" href="../pages/user/profile.html">Anna </a>attached final-pic.png to this card</p>
                                                <div class="fs--2">4 hours ago</div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="kanban-modal-label-2" aria-hidden="true" id="kanban-modal-2">
                            <div class="modal-dialog modal-lg mt-6" role="document">
                                <div class="modal-content border-0">
                                <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
                                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                                    <h4 class="mb-1" id="kanban-modal-label-1">Add a new illustration to the landing page</h4>
                                    <p class="fs--2 mb-0">Added by <a class="link-600 fw-semi-bold" href="#!">Antony</a></p>
                                    </div>
                                    <div class="p-4">
                                    <div class="row">
                                        <div class="col-lg-9">
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-user" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-2 fs-0">Membres</h5>
                                            <ul class="nav avatar-group mb-0">
                                                <li class="nav-item dropdown"></li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">Anna Karinina</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">Antony Hopkins</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">Rowan Atkinson</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="assets/img/team/4.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="assets/img/team/4.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">John Doe</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="assets/img/team/5.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="assets/img/team/5.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">Emily Rose</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="../assets/img/team/6.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="../assets/img/team/6.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="../pages/user/profile.html">Marry Jane</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-caret-none p-0 ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <div class="avatar-name rounded-circle avatar-button"><span><span class="fas fa-plus" data-fa-trasnsform="grow-2"></span></span></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md" data-list='{"valueNames":["name"]}'>
                                                    <h6 class="dropdown-header py-0 px-3 mb-0">Select Member</h6>
                                                    <div class="dropdown-divider"></div>
                                                    <form class="px-3 mb-2">
                                                    <input class="form-control form-control-sm search" type="text" placeholder="Search team member" />
                                                    </form>
                                                    <ul class="list-unstyled list">
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">Anna Karinina</h6>
                                                        </div>
                                                        </a></li>
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">Antony Hopkins</h6>
                                                        </div>
                                                        </a></li>
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">Rowan Atkinson</h6>
                                                        </div>
                                                        </a></li>
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">John Doe</h6>
                                                        </div>
                                                        </a></li>
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">Emily Rose</h6>
                                                        </div>
                                                        </a></li>
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/6.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">Marry Jane</h6>
                                                        </div>
                                                        </a></li>
                                                    </ul>
                                                </div>
                                                </li>
                                            </ul>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-tag" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-2 fs-0">Status</h5>
                                            <div class="d-flex">
                                                <span class="badge me-1 py-2 badge-soft-success">Terminé</span>
                                                <span class="badge me-1 py-2 badge-soft-primary">Pas commencé</span>
                                                <span class="badge me-1 py-2 badge-soft-info">En cours</span>
                                            </div>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-tag" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-2 fs-0">Echéance</h5>
                                            <div class="d-flex">
                                                <span class="badge me-1 py-2 badge-soft-success">05/03/2023</span>
                                                
                                            </div>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-align-left" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-2 fs-0">Dernière modification</h5>
                                            <p class="text-word-break fs--1">The illustration must match to the contrast of the theme. The illustraion must described the concept of the design. To know more about the theme visit the page. <a href="https://prium.github.io/falcon/v3.4.0/index.html" target="_blank">https://prium.github.io/falcon/v3.4.0/index.html</a></p>
                                            <form>
                                                <textarea class="form-control border-0 rounded-bottom-0 resize-none" rows="3" contentEditable="true"></textarea>
                                                <div class="d-flex flex-between-center bg-light rounded-bottom p-2 mt-1">
                                                    <button class="btn btn-sm btn-primary" type="submit">Save</button>
                                                    <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-paperclip"></span></a></li>
                                                    <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-at"></span></a></li>
                                                    <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-image"></span></a></li>
                                                    </ul>
                                                </div>
                                            </form>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"> <span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-paperclip" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <div class="d-flex justify-content-between mb-2">
                                                <h5 class="mb-0 fs-0">Attachments</h5>
                                                <div class="dropdown">
                                                <button class="btn btn-falcon-default btn-sm dropdown-toggle dropdown-caret-none fs--2" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="fas fa-plus"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#!">Computer</a><a class="dropdown-item" href="#!">Google Drive</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Attach Link</a>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-3"><a class="text-decoration-none me-3" href="../assets/img/kanban/3.jpg" data-gallery="attachment-bg">
                                                <div class="bg-attachment">
                                                    <div class="bg-holder rounded" style="background-image:url(../assets/img/kanban/3.jpg);">
                                                    </div>
                                                    <!--/.bg-holder-->

                                                </div>
                                                </a>
                                                <div class="flex-1 fs--2">
                                                <h6 class="mb-1"> <a class="text-decoration-none" href="../assets/img/kanban/3.jpg" data-gallery="attachment-title">final-img.jpg</a>
                                                </h6><a class="link-600 fw-semi-bold" href="#!">Edit</a><span class="mx-1">|</span><a class="link-600 fw-semi-bold" href="#!">Remove</a>
                                                <p class="mb-0">Uploaded at 2020-04-18 5:25 pm</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-3"><a class="text-decoration-none me-3" href="../assets/img/kanban/4.jpg" data-gallery="attachment-bg">
                                                <div class="bg-attachment">
                                                    <div class="bg-holder rounded" style="background-image:url(../assets/img/kanban/4.jpg);">
                                                    </div>
                                                    <!--/.bg-holder-->

                                                </div>
                                                </a>
                                                <div class="flex-1 fs--2">
                                                <h6 class="mb-1"> <a class="text-decoration-none" href="../assets/img/kanban/4.jpg" data-gallery="attachment-title">picture.png</a>
                                                </h6><a class="link-600 fw-semi-bold" href="#!">Edit</a><span class="mx-1">|</span><a class="link-600 fw-semi-bold" href="#!">Remove</a>
                                                <p class="mb-0">Uploaded at 2020-04-20 4:34 pm</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-3"><a class="text-decoration-none me-3" href="#!">
                                                <div class="bg-attachment"><span class="text-uppercase fw-bold">txt</span>
                                                </div>
                                                </a>
                                                <div class="flex-1 fs--2">
                                                <h6 class="mb-1"> <a class="text-decoration-none" href="#!">sample.txt</a>
                                                </h6><a class="link-600 fw-semi-bold" href="#!">Edit</a><span class="mx-1">|</span><a class="link-600 fw-semi-bold" href="#!">Remove</a>
                                                <p class="mb-0">Uploaded at 2020-04-21 2:10 pm</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-3"><a class="text-decoration-none me-3" href="#!">
                                                <div class="bg-attachment"><span class="text-uppercase fw-bold">pdf</span>
                                                </div>
                                                </a>
                                                <div class="flex-1 fs--2">
                                                <h6 class="mb-1"> <a class="text-decoration-none" href="#!">example.pdf</a>
                                                </h6><a class="link-600 fw-semi-bold" href="#!">Edit</a><span class="mx-1">|</span><a class="link-600 fw-semi-bold" href="#!">Remove</a>
                                                <p class="mb-0">Uploaded at 2020-05-02 11:34 am</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center"><a class="text-decoration-none me-3" href="../assets/video/beach.mp4" data-gallery="attachment-bg">
                                                <div class="bg-attachment">
                                                    <div class="bg-holder rounded" style="background-image:url(../assets/video/beach.jpg);">
                                                    </div>
                                                    <!--/.bg-holder-->

                                                    <div class="icon-play"><span class="fas fa-play"></span></div>
                                                </div>
                                                </a>
                                                <div class="flex-1 fs--2">
                                                <h6 class="mb-1"> <a class="text-decoration-none" href="../assets/video/beach.mp4" data-gallery="attachment-title">beach.mp4</a>
                                                </h6><a class="link-600 fw-semi-bold" href="#!">Edit</a><span class="mx-1">|</span><a class="link-600 fw-semi-bold" href="#!">Remove</a>
                                                <p class="mb-0">Uploaded at 2020-05-10 3:40 pm</p>
                                                </div>
                                            </div>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary far fa-comment" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-3 fs-0">Comments</h5>
                                            <div class="d-flex">
                                                <div class="avatar avatar-l me-2">
                                                <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />

                                                </div>
                                                <div class="flex-1 fs--1">
                                                <div class="position-relative border rounded-1 mb-3">
                                                    <form>
                                                    <textarea class="form-control border-0 rounded-bottom-0 resize-none" rows="3" contentEditable="true"></textarea>
                                                    <div class="d-flex flex-between-center bg-light rounded-bottom p-2 mt-1">
                                                        <button class="btn btn-sm btn-primary" type="submit">Save</button>
                                                        <ul class="list-inline mb-0">
                                                        <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-paperclip"></span></a></li>
                                                        <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-at"></span></a></li>
                                                        <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-image"></span></a></li>
                                                        </ul>
                                                    </div>
                                                    </form>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3"><a href="../pages/user/profile.html">
                                                <div class="avatar avatar-l">
                                                    <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />

                                                </div>
                                                </a>
                                                <div class="flex-1 ms-2 fs--1">
                                                <p class="mb-1 bg-200 rounded-3 p-2"><a class="fw-semi-bold" href="../pages/user/profile.html">Rowan </a>This time we should finish the task before the deadline</p><a href="#!">Like</a> &bull; <a href="#!">Reply</a> &bull; 23min
                                                </div>
                                            </div>
                                            <div class="d-flex"><a href="../pages/user/profile.html">
                                                <div class="avatar avatar-l">
                                                    <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />

                                                </div>
                                                </a>
                                                <div class="flex-1 ms-2 fs--1">
                                                <p class="mb-1 bg-200 rounded-3 p-2"><a class="fw-semi-bold" href="../pages/user/profile.html">Emma </a>We have more task to do</p><a href="#!">Like</a> &bull; <a href="#!">Reply</a> &bull; 2hour
                                                </div>
                                            </div>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-list-ul" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-3 fs-0">Activity </h5>
                                            <div class="d-flex mb-3"><a href="../pages/user/profile.html">
                                                <div class="avatar avatar-l">
                                                    <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />

                                                </div>
                                                </a>
                                                <div class="flex-1 ms-2 fs--1">
                                                <p class="mb-0"><a class="fw-semi-bold" href="../pages/user/profile.html">Rowan </a>Added the card</p>
                                                <div class="fs--2">6 hours ago</div>
                                                </div>
                                            </div>
                                            <div class="d-flex"><a href="../pages/user/profile.html">
                                                <div class="avatar avatar-l">
                                                    <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />

                                                </div>
                                                </a>
                                                <div class="flex-1 ms-2 fs--1">
                                                <p class="mb-0"><a class="fw-semi-bold" href="../pages/user/profile.html">Anna </a>attached final-pic.png to this card</p>
                                                <div class="fs--2">4 hours ago</div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="kanban-modal-label-3" aria-hidden="true" id="kanban-modal-3">
                            <div class="modal-dialog modal-lg mt-6" role="document">    
                                <div class="modal-content border-0">
                                <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
                                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                                    <h4 class="mb-1" id="kanban-modal-label-1">Add a new illustration to the landing page</h4>
                                    <p class="fs--2 mb-0">Added by <a class="link-600 fw-semi-bold" href="#!">Antony</a></p>
                                    </div>
                                    <div class="p-4">
                                    <div class="row">
                                        <div class="col-lg-9">
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-user" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-2 fs-0">Membres</h5>
                                            <ul class="nav avatar-group mb-0">
                                                <li class="nav-item dropdown"></li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">Anna Karinina</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">Antony Hopkins</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">Rowan Atkinson</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="assets/img/team/4.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="assets/img/team/4.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">John Doe</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="assets/img/team/5.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="assets/img/team/5.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="pages/user/profile.html">Emily Rose</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <img class="rounded-circle" src="../assets/img/team/6.jpg" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md px-0 py-3">
                                                    <div class="d-flex align-items-center position-relative px-3">
                                                    <div class="avatar avatar-2xl me-2">
                                                        <img class="rounded-circle" src="../assets/img/team/6.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0"><a class="stretched-link text-900" href="../pages/user/profile.html">Marry Jane</a></h6>
                                                        <p class="mb-0 fs--2">Member</p>
                                                    </div>
                                                    </div>
                                                    <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a class="dropdown-item text-danger" href="#!">Remove Member</a>
                                                </div>
                                                </li>
                                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-caret-none p-0 ms-n1" href="#" role="button" data-bs-toggle="dropdown">
                                                    <div class="avatar avatar-xl">
                                                    <div class="avatar-name rounded-circle avatar-button"><span><span class="fas fa-plus" data-fa-trasnsform="grow-2"></span></span></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-md" data-list='{"valueNames":["name"]}'>
                                                    <h6 class="dropdown-header py-0 px-3 mb-0">Select Member</h6>
                                                    <div class="dropdown-divider"></div>
                                                    <form class="px-3 mb-2">
                                                    <input class="form-control form-control-sm search" type="text" placeholder="Search team member" />
                                                    </form>
                                                    <ul class="list-unstyled list">
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">Anna Karinina</h6>
                                                        </div>
                                                        </a></li>
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">Antony Hopkins</h6>
                                                        </div>
                                                        </a></li>
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">Rowan Atkinson</h6>
                                                        </div>
                                                        </a></li>
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">John Doe</h6>
                                                        </div>
                                                        </a></li>
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">Emily Rose</h6>
                                                        </div>
                                                        </a></li>
                                                    <li><a class="d-flex align-items-center text-decoration-none py-1 px-3" href="#!">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle" src="../assets/img/team/6.jpg" alt="" />

                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 link-900 name">Marry Jane</h6>
                                                        </div>
                                                        </a></li>
                                                    </ul>
                                                </div>
                                                </li>
                                            </ul>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-tag" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-2 fs-0">Status</h5>
                                            <div class="d-flex">
                                                <span class="badge me-1 py-2 badge-soft-success">Terminé</span>
                                                <span class="badge me-1 py-2 badge-soft-primary">Pas commencé</span>
                                                <span class="badge me-1 py-2 badge-soft-info">En cours</span>
                                            </div>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-tag" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-2 fs-0">Echéance</h5>
                                            <div class="d-flex">
                                                <span class="badge me-1 py-2 badge-soft-success">05/03/2023</span>
                                                
                                            </div>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-align-left" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-2 fs-0">Dernière modification</h5>
                                            <p class="text-word-break fs--1">The illustration must match to the contrast of the theme. The illustraion must described the concept of the design. To know more about the theme visit the page. <a href="https://prium.github.io/falcon/v3.4.0/index.html" target="_blank">https://prium.github.io/falcon/v3.4.0/index.html</a></p>
                                            <form>
                                                <textarea class="form-control border-0 rounded-bottom-0 resize-none" rows="3" contentEditable="true"></textarea>
                                                <div class="d-flex flex-between-center bg-light rounded-bottom p-2 mt-1">
                                                    <button class="btn btn-sm btn-primary" type="submit">Save</button>
                                                    <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-paperclip"></span></a></li>
                                                    <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-at"></span></a></li>
                                                    <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-image"></span></a></li>
                                                    </ul>
                                                </div>
                                            </form>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"> <span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-paperclip" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <div class="d-flex justify-content-between mb-2">
                                                <h5 class="mb-0 fs-0">Attachments</h5>
                                                <div class="dropdown">
                                                <button class="btn btn-falcon-default btn-sm dropdown-toggle dropdown-caret-none fs--2" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="fas fa-plus"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#!">Computer</a><a class="dropdown-item" href="#!">Google Drive</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Attach Link</a>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-3"><a class="text-decoration-none me-3" href="../assets/img/kanban/3.jpg" data-gallery="attachment-bg">
                                                <div class="bg-attachment">
                                                    <div class="bg-holder rounded" style="background-image:url(../assets/img/kanban/3.jpg);">
                                                    </div>
                                                    <!--/.bg-holder-->

                                                </div>
                                                </a>
                                                <div class="flex-1 fs--2">
                                                <h6 class="mb-1"> <a class="text-decoration-none" href="../assets/img/kanban/3.jpg" data-gallery="attachment-title">final-img.jpg</a>
                                                </h6><a class="link-600 fw-semi-bold" href="#!">Edit</a><span class="mx-1">|</span><a class="link-600 fw-semi-bold" href="#!">Remove</a>
                                                <p class="mb-0">Uploaded at 2020-04-18 5:25 pm</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-3"><a class="text-decoration-none me-3" href="../assets/img/kanban/4.jpg" data-gallery="attachment-bg">
                                                <div class="bg-attachment">
                                                    <div class="bg-holder rounded" style="background-image:url(../assets/img/kanban/4.jpg);">
                                                    </div>
                                                    <!--/.bg-holder-->

                                                </div>
                                                </a>
                                                <div class="flex-1 fs--2">
                                                <h6 class="mb-1"> <a class="text-decoration-none" href="../assets/img/kanban/4.jpg" data-gallery="attachment-title">picture.png</a>
                                                </h6><a class="link-600 fw-semi-bold" href="#!">Edit</a><span class="mx-1">|</span><a class="link-600 fw-semi-bold" href="#!">Remove</a>
                                                <p class="mb-0">Uploaded at 2020-04-20 4:34 pm</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-3"><a class="text-decoration-none me-3" href="#!">
                                                <div class="bg-attachment"><span class="text-uppercase fw-bold">txt</span>
                                                </div>
                                                </a>
                                                <div class="flex-1 fs--2">
                                                <h6 class="mb-1"> <a class="text-decoration-none" href="#!">sample.txt</a>
                                                </h6><a class="link-600 fw-semi-bold" href="#!">Edit</a><span class="mx-1">|</span><a class="link-600 fw-semi-bold" href="#!">Remove</a>
                                                <p class="mb-0">Uploaded at 2020-04-21 2:10 pm</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-3"><a class="text-decoration-none me-3" href="#!">
                                                <div class="bg-attachment"><span class="text-uppercase fw-bold">pdf</span>
                                                </div>
                                                </a>
                                                <div class="flex-1 fs--2">
                                                <h6 class="mb-1"> <a class="text-decoration-none" href="#!">example.pdf</a>
                                                </h6><a class="link-600 fw-semi-bold" href="#!">Edit</a><span class="mx-1">|</span><a class="link-600 fw-semi-bold" href="#!">Remove</a>
                                                <p class="mb-0">Uploaded at 2020-05-02 11:34 am</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center"><a class="text-decoration-none me-3" href="../assets/video/beach.mp4" data-gallery="attachment-bg">
                                                <div class="bg-attachment">
                                                    <div class="bg-holder rounded" style="background-image:url(../assets/video/beach.jpg);">
                                                    </div>
                                                    <!--/.bg-holder-->

                                                    <div class="icon-play"><span class="fas fa-play"></span></div>
                                                </div>
                                                </a>
                                                <div class="flex-1 fs--2">
                                                <h6 class="mb-1"> <a class="text-decoration-none" href="../assets/video/beach.mp4" data-gallery="attachment-title">beach.mp4</a>
                                                </h6><a class="link-600 fw-semi-bold" href="#!">Edit</a><span class="mx-1">|</span><a class="link-600 fw-semi-bold" href="#!">Remove</a>
                                                <p class="mb-0">Uploaded at 2020-05-10 3:40 pm</p>
                                                </div>
                                            </div>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary far fa-comment" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-3 fs-0">Comments</h5>
                                            <div class="d-flex">
                                                <div class="avatar avatar-l me-2">
                                                <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />

                                                </div>
                                                <div class="flex-1 fs--1">
                                                <div class="position-relative border rounded-1 mb-3">
                                                    <form>
                                                    <textarea class="form-control border-0 rounded-bottom-0 resize-none" rows="3" contentEditable="true"></textarea>
                                                    <div class="d-flex flex-between-center bg-light rounded-bottom p-2 mt-1">
                                                        <button class="btn btn-sm btn-primary" type="submit">Save</button>
                                                        <ul class="list-inline mb-0">
                                                        <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-paperclip"></span></a></li>
                                                        <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-at"></span></a></li>
                                                        <li class="list-inline-item me-1"><a class="link-600 p-2 transition-base rounded" href="#!"><span class="fas fa-image"></span></a></li>
                                                        </ul>
                                                    </div>
                                                    </form>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3"><a href="../pages/user/profile.html">
                                                <div class="avatar avatar-l">
                                                    <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />

                                                </div>
                                                </a>
                                                <div class="flex-1 ms-2 fs--1">
                                                <p class="mb-1 bg-200 rounded-3 p-2"><a class="fw-semi-bold" href="../pages/user/profile.html">Rowan </a>This time we should finish the task before the deadline</p><a href="#!">Like</a> &bull; <a href="#!">Reply</a> &bull; 23min
                                                </div>
                                            </div>
                                            <div class="d-flex"><a href="../pages/user/profile.html">
                                                <div class="avatar avatar-l">
                                                    <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />

                                                </div>
                                                </a>
                                                <div class="flex-1 ms-2 fs--1">
                                                <p class="mb-1 bg-200 rounded-3 p-2"><a class="fw-semi-bold" href="../pages/user/profile.html">Emma </a>We have more task to do</p><a href="#!">Like</a> &bull; <a href="#!">Reply</a> &bull; 2hour
                                                </div>
                                            </div>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-list-ul" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-3 fs-0">Activity </h5>
                                            <div class="d-flex mb-3"><a href="../pages/user/profile.html">
                                                <div class="avatar avatar-l">
                                                    <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />

                                                </div>
                                                </a>
                                                <div class="flex-1 ms-2 fs--1">
                                                <p class="mb-0"><a class="fw-semi-bold" href="../pages/user/profile.html">Rowan </a>Added the card</p>
                                                <div class="fs--2">6 hours ago</div>
                                                </div>
                                            </div>
                                            <div class="d-flex"><a href="../pages/user/profile.html">
                                                <div class="avatar avatar-l">
                                                    <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />

                                                </div>
                                                </a>
                                                <div class="flex-1 ms-2 fs--1">
                                                <p class="mb-0"><a class="fw-semi-bold" href="../pages/user/profile.html">Anna </a>attached final-pic.png to this card</p>
                                                <div class="fs--2">4 hours ago</div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>				
                <!-- </div>				 -->

            <!-- footer -->
            <?php include('footer.php') ?>

        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- page custom -->
    <?php include('page-custom.php') ?>

    <!-- script js -->
    <?php include('script.php') ?>

</body>

</html>