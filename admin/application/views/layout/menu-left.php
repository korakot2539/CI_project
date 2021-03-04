<div class="sidebar" data="red">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">
                
            </a>

            <div class="simple-text">
            Manage Panel
            </div>
        </div>
        <ul class="nav">
            <li class="<?php if($this->uri->segment(1)=="Movie"){echo "active";}?>">
                <a href="<?php echo base_url('Movie') ?>">
                    <i class="tim-icons icon-video-66"></i>
                    <p class="leftpanel-text">Movie</p>
                </a>
            </li>
            <li class="<?php if($this->uri->segment(1)=="Category"){echo "active";}?>">
                <a href="<?php echo base_url('Category') ?>">
                    <i class="tim-icons icon-tag"></i>
                    <p class="leftpanel-text">Category</p>
                </a>
            </li>
            <li class="<?php if($this->uri->segment(1)=="User"){echo "active";}?>">
                <a href="<?php echo base_url('User') ?>">
                    <i class="tim-icons icon-single-02"></i>
                    <p class="leftpanel-text">User</p>
                </a>
            </li>
        </ul>
    </div>
</div>