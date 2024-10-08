<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('dashboard')?>">Home</a>
            <i class="icon-angle-right"></i> 
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="<?php echo base_url('add/brand')?>">Add Brand</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Brand</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message');?></p>
            </div>
            <div class="box-content">
                <!-- 添加商品信息的表单 -->
                <form class="form-horizontal" action="<?php echo base_url('save/brand')?>" method="post">
                <?php
                // 添加CSRF token的生成
                $csrf = array(
                    # $csrf['name']获取 CSRF token名称。
                'name' => $this->security->get_csrf_token_name(),
                    // $csrf['hash']：获取 CSRF token的哈希值。
                'hash' => $this->security->get_csrf_hash()

                );

                ?>
                    <!-- 
                        添加 CSRF 隐藏的输入字段，用于存储 CSRF token；
                        作用：当表单提交时，服务器会检查这个 token，确保请求是合法的，避免跨站请求伪造攻击。
                     -->
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />                
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">Brand Name</label>
                            <div class="controls">
                                <input class="span6 typeahead" name="brand_name" id="fileInput" type="text"/>
                            </div>
                        </div>          
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Brand Description</label>
                            <div class="controls">
                                <textarea class="cleditor" id="textarea2" name="brand_description" rows="3"></textarea>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Publication Status</label>
                            <div class="controls">
                                <select name="upload_status">
                                    <option value="1">Published</option>
                                    <option value="0">UnPublished</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div><!--/row-->


</div><!--/.fluid-container-->

<!-- end: Content -->