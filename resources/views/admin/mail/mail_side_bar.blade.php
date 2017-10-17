            <div class="col-sm-3 com-w3ls">
                <section class="panel">
                    <div class="panel-body">
                        <a href="mail_compose.html"  class="btn btn-compose">
                            Compose Mail
                        </a>
                        <ul class="nav nav-pills nav-stacked mail-nav">
                            <li class="active"><a href="{{ url('/mail') }}"> <i class="fa fa-inbox"></i> Inbox  <span class="label label-danger pull-right inbox-notification">{{ $unread_contact }}</span></a></li>
                            <li><a href=""> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                            <li><a href=""> <i class="fa fa-certificate"></i> Important</a></li>
                            <li><a href=""> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-info pull-right inbox-notification">123</span></a></a></li>
                            <li><a href=""> <i class="fa fa-trash-o"></i> Trash</a></li>
                        </ul>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked labels-info ">
                            <li> <h4>Buddy online</h4> </li>
                            <li> <a href=""> <i class="fa fa-comments-o text-success"></i> Jonathan Smith <p>I do not think</p></a>  </li>
                            <li> <a href=""> <i class="fa fa-comments-o text-danger"></i> iRon <p>Busy with coding</p></a> </li>
                            <li> <a href=""> <i class="fa fa-comments-o text-muted "></i> Anjelina Joli <p>I out of control</p></a></li>
                            <li> <a href=""> <i class="fa fa-comments-o text-muted "></i> Samual Daren <p>I am not here</p></a></li>
                            <li> <a href=""> <i class="fa fa-comments-o text-muted "></i> Tis man <p>I do not think</p></a>  </li>
                        </ul>
                        <a href=""> + Add More</a>

                        <div class="inbox-body text-center inbox-action">
                            <div class="btn-group">
                                <a class="btn mini btn-default" href="javascript:;">
                                    <i class="fa fa-power-off"></i>
                                </a>
                            </div>
                            <div class="btn-group">
                                <a class="btn mini btn-default" href="javascript:;">
                                    <i class="fa fa-cog"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>