<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="assets/css/landingpage.css">
        <link rel="stylesheet" href="assets/css/synco_chat.css">
        <link rel="stylesheet" href="assets/css/synco_project.css">
 
        <title>Home | Sync-o</title>
    </head>
    <body>
        <header class="header">
            <div class="header__container">
                <a href="#" class="header__logo">Sync-o</a>
    
                <div class="header__search">
                    <input type="search" placeholder="Search" class="header__input">
                    <i class='bx bx-search header__icon'></i>
                </div>
    
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="#" class="nav__link nav__logo">
                        <i class='bx bxs-disc nav__icon' ></i>
                        <span class="nav__logo-name">Sync-o</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Profile</h3>
    
                            <a href="#" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>
                            
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name">Profile</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="friendlist.html" class="nav__dropdown-item">Friend List</a>
                                        <a href="profile" class="nav__dropdown-item">Account</a>
                                    </div>
                                </div>
                            </div> 
                        <div class="nav__items"> 
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bell nav__icon' ></i>
                                    <span class="nav__name">Create</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="projectcreation.html" class="nav__dropdown-item">Projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="logout" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
        <main>
            <div class='app'>
                <main class='project'>
                  <div class='project-info'>
                    <div class='project-participants'>
                      <span></span>
                      <span></span>
                      <span></span>
                      <button class='project-participants__add'>Add Participant</button>
                      </div>
                  </div>
                  <div class='project-tasks'>
                    <div class='project-column'>
                      <div class='project-column-heading'>
                        <h2 class='project-column-heading__title'>To do</h2><button class='project-column-heading__options'><i class="fas fa-ellipsis-h"></i></button>
                      </div>
                      <div class='task' draggable='true'>
                        <div class='task__tags'><span class='task__tag task__tag--copyright'>Jem Zuckerberg</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class='task__stats'>
                          <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                          <span><i class="fas fa-comment"></i>3</span>
                          <span><i class="fas fa-paperclip"></i>7</span>
                          <span class='task__owner'></span>
                        </div>
                      </div>
                      
                              <div class='task' draggable='true'>
                        <div class='task__tags'><span class='task__tag task__tag--design'>Jem Zuckerberg</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class='task__stats'>
                          <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                          <span><i class="fas fa-comment"></i>2</span>
                          <span><i class="fas fa-paperclip"></i>5</span>
                          <span class='task__owner'></span>
                        </div>
                      </div>
                      
                              <div class='task' draggable='true'>
                        <div class='task__tags'><span class='task__tag task__tag--copyright'>Jem Zuckerberg</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class='task__stats'>
                          <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                          <span><i class="fas fa-comment"></i>2</span>
                          <span><i class="fas fa-paperclip"></i>3</span>
                          <span class='task__owner'></span>
                        </div>
                      </div>
                    </div>
                    <div class='project-column'><div class='project-column-heading'>
                        <h2 class='project-column-heading__title'>In Progress</h2><button class='project-column-heading__options'><i class="fas fa-ellipsis-h"></i></button>
                      </div>
                        
                      <div class='task' draggable='true'>
                        <div class='task__tags'><span class='task__tag task__tag--design'>Jem Zuckerberg</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class='task__stats'>
                          <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                          <span><i class="fas fa-comment"></i>5</span>
                          <span><i class="fas fa-paperclip"></i>5</span> 
                          <span class='task__owner'></span>
                        </div>
                      </div>
                      
                      <div class='task' draggable='true'>
                        <div class='task__tags'><span class='task__tag task__tag--illustration'>Jem Zuckerberg</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class='task__stats'>
                          <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                          <span><i class="fas fa-comment"></i>8</span>
                          <span><i class="fas fa-paperclip"></i>7</span>
                          <span class='task__owner'></span>
                        </div>
                      </div>
                      
                      <div class='task' draggable='true'>
                        <div class='task__tags'><span class='task__tag task__tag--copyright'>Jem Zuckerberg</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class='task__stats'>
                          <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                          <span><i class="fas fa-comment"></i>12</span>
                          <span><i class="fas fa-paperclip"></i>11</span>
                          <span class='task__owner'></span>
                        </div>
                      </div>
                      
                      <div class='task' draggable='true'>
                        <div class='task__tags'><span class='task__tag task__tag--illustration'>Jem Zuckerberg</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class='task__stats'>
                          <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                          <span><i class="fas fa-comment"></i>4</span>
                          <span><i class="fas fa-paperclip"></i>8</span>
                          <span class='task__owner'></span>
                        </div>
                      </div>
                      
                      </div>
                    <div class='project-column'><div class='project-column-heading'>
                        <h2 class='project-column-heading__title'>Needs Review</h2><button class='project-column-heading__options'><i class="fas fa-ellipsis-h"></i></button>
                      </div>
                        
                      <div class='task' draggable='true'>
                        <div class='task__tags'><span class='task__tag task__tag--copyright'>Harold Musk</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class='task__stats'>
                          <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                          <span><i class="fas fa-comment"></i>4</span>
                          <span><i class="fas fa-paperclip"></i>0</span>
                          <span class='task__owner'></span>
                        </div>
                      </div>
                      <div class='task' draggable='true'>
                        <div class='task__tags'><span class='task__tag task__tag--design'>Jimmy Neutron</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class='task__stats'>
                          <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                          <span><i class="fas fa-comment"></i>0</span>
                          <span><i class="fas fa-paperclip"></i>5</span>
                          <span class='task__owner'></span>
                        </div>
                      </div>
                      <div class='task' draggable='true'>
                        <div class='task__tags'><span class='task__tag task__tag--illustration'>Harold Musk</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class='task__stats'>
                          <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                          <span><i class="fas fa-comment"></i>2</span>
                          <span><i class="fas fa-paperclip"></i>2</span>
                          <span class='task__owner'></span>
                        </div>
                      </div>
                      </div>
                    <div class='project-column'><div class='project-column-heading'>
                        <h2 class='project-column-heading__title'>Done</h2><button class='project-column-heading__options'><i class="fas fa-ellipsis-h"></i></button>
                      </div>
                      
                       <div class='task' draggable='true'>
                        <div class='task__tags'><span class='task__tag task__tag--illustration'>Harold Musk</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class='task__stats'>
                          <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                          <span><i class="fas fa-comment"></i>12</span>
                          <span><i class="fas fa-paperclip"></i>5</span>
                          <span class='task__owner'></span>
                        </div>
                      </div>
                      
                       <div class='task' draggable='true'>
                        <div class='task__tags'><span class='task__tag task__tag--illustration'>Jem Zuckerberg</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class='task__stats'>
                          <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                          <span><i class="fas fa-comment"></i>3</span>
                          <span><i class="fas fa-paperclip"></i>7</span>
                          <span class='task__owner'></span>
                        </div>
                      </div>
                      
                       <div class='task' draggable='true'>
                        <div class='task__tags'><span class='task__tag task__tag--copyright'>Harold Musk</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class='task__stats'>
                          <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                          <span><i class="fas fa-comment"></i>8</span>
                          <span><i class="fas fa-paperclip"></i>16</span>
                          <span class='task__owner'></span>
                        </div>
                      </div>
                      
                      </div>
                    
                  </div>
                </main>
                <aside class='task-details'>
                  <div class='tag-progress'>
                    <h2>Task Progress</h2>
                    <div class='tag-progress'>
                      <p>Coach <span>3/8</span></p>
                      <progress class="progress progress--copyright" max="8" value="3"> 3 </progress>
                    </div>
                    <div class='tag-progress'>
                      <p>Connect <span>6/10</span></p>
                      <progress class="progress progress--illustration" max="10" value="6"> 6 </progress>
                    </div>
                    <div class='tag-progress'>
                      <p>Check <span>2/7</span></p>
                      <progress class="progress progress--design" max="7" value="2"> 2 </progress>
                    </div>
                  </div>
                </aside>
              </div>
            <!--ChatBox Section-->

            <div class="chatbox-wrapper">
                <div class="chatbox-toggle">
                    <i class='bx bx-message-dots'></i>
                </div>
                <div class="chatbox-message-wrapper">
                    <div class="chatbox-message-header">
                        <div class="chatbox-message-profile">
                            <img src="assets/image/tempo_pfp.jpg" alt="" class="chatbox-message-image">
                            <div>
                                <h4 class="chatbox-message-name">Jem Zuckerberg</h4>
                                <p class="chatbox-message-status">online</p>
                            </div>
                        </div>
                        <div class="chatbox-message-dropdown">
                            <i class='bx bx-dots-vertical-rounded chatbox-message-dropdown-toggle'></i>
                            <ul class="chatbox-message-dropdown-menu">
                                <li>
                                    <a href="#">Search</a>
                                </li>
                                <li>
                                    <a href="#">Report</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="chatbox-message-content">
                        <h4 class="chatbox-message-no-message">Start a Conversation</h4>
                    </div>
                    <div class="chatbox-message-bottom">
                        <form action="#" class="chatbox-message-form">
                            <textarea rows="1" placeholder="Type message..." class="chatbox-message-input"></textarea>
                            <button type="submit" class="chatbox-message-submit"><i class='bx bx-send' ></i></button>
                        </form>
                    </div>
                </div>
            </div>

        </main>
        <script src="assets/javascript/landingpage.js"></script>
        <script src="assets/javascript/synco_chat.js"></script>
        <script src="assets/javascript/synco_project.js"></script>
    </body>
</html>