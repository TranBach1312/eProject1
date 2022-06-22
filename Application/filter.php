<form action="" method="GET" class="filter-form">
                <div class="row">
                    <label for="">Brand</label>
                    <select name="brand" id="">
                        <option value="">Brand</option>
                        <?php
                            foreach($brands as $brand){
                                if($brand['id'] == $current['brand']){
                                    echo '<option value="'.$brand['id'].'" selected>'.$brand['name'].'</option>';
                                }
                                else{
                                    echo '<option value="'.$brand['id'].'">'.$brand['name'].'</option>';
                                }
                            }
                        ?>
                        
                    </select>
                </div>
                </select>
                <div class="row">
                    <label for="">Range</label>
                    <select name="range" id="">
                        <option value="">Range</option>
                        <?php
                            foreach($ranges as $range){
                                if($range['id'] == $current['range']){
                                    echo '<option value="'.$range['id'].'" selected>'.$range['name'].'</option>';
                                }
                                else{
                                    echo '<option value="'.$range['id'].'">'.$range['name'].'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="row">
                    <label for="">Transmission Type</label>
                    <select name="transmission" id="">
                        <option value="">Transmission</option>
                        <?php
                            foreach($transmissions as $transmission){
                                if($transmission['id'] == $current['transmission']){
                                    echo '<option value="'.$transmission['id'].'" selected>'.$transmission['name'].'</option>';
                                }
                                else{
                                    echo '<option value="'.$transmission['id'].'">'.$transmission['name'].'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="row">
                    <label for="">Fuel Type</label>
                    <select name="fuel" id="">
                        <option value="">Fuel Type</option>
                        <?php
                            foreach($fuels as $fuel){
                                if($fuel['id'] == $current['fuel']){
                                    echo '<option value="'.$fuel['id'].'" selected>'.$fuel['name'].'</option>';
                                }
                                else{
                                    echo '<option value="'.$fuel['id'].'">'.$fuel['name'].'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="row">
                    <label for="">Status</label>
                    <select name="status" id="">
                        <option value="">Status</option>
                        <option value="0" <?php if($current['status'] == 0){
                            echo 'selected';;
                        }
                            ?>>New</option>
                        <option value="1"<?php if($current['status'] == 1){
                            echo 'selected';;
                        }
                            ?>>PreOwned</option>
                    </select>
                </div>
                <div class="row"><button>Search</button></div>

            </form>