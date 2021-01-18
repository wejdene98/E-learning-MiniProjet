<?php
    $filter_object = new \TUTOR\Course_Filter();
    $filter_levels = array(
        'beginner'=>'Beginner',
        'intermediate'=>'Intermediate',
        'expert'=>'Expert'
    );
    $filter_prices=array(
        'free'=>'Free',
        'paid'=>'Paid'
    );

    $supported_filters = tutor_utils()->get_option('supported_course_filters', array());
    $supported_filters = array_keys($supported_filters);
?>
<div>    
    <?php
        if(in_array('search', $supported_filters)){
            ?>
            <div class="tutor-course-search-field">
                <input type="text" name="tutor-course-filter-keyword" placeholder="<?php _e('Search...'); ?>"/>
                <i class="tutor-icon-magnifying-glass-1"></i>
            </div>
            <?php
        }
    ?>
    <div>
        <?php
            if(in_array('category', $supported_filters)){
                ?>
                <div>
                    <h4><?php _e('Category', 'tutor'); ?></h4>
                    <?php $filter_object->render_terms('category'); ?>
                </div>
                <?php
            }

            if(in_array('tag', $supported_filters)){
                ?>
                <div>
                    <h4><?php _e('Tag', 'tutor'); ?></h4>
                    <?php $filter_object->render_terms('tag'); ?>
                </div>
                <?php
            }
        ?>
    </div>
    <div>
        <?php
            if(in_array('difficulty_level', $supported_filters)){
                ?>
                <div>
                    <h4><?php _e('Level', 'tutor'); ?></h4>
                    <?php 
                        foreach($filter_levels as $value=>$title){
                            ?>
                                <label>
                                    <input type="checkbox" name="tutor-course-filter-level" value="<?php echo $value; ?>"/>&nbsp;
                                    <?php echo $title; ?>
                                </label>
                            <?php
                        }
                    ?>
                </div>
                <?php
            }

            if(in_array('price_type', $supported_filters)){
                ?>
                <div>
                    <h4><?php _e('Price', 'tutor'); ?></h4>
                    <?php 
                        foreach($filter_prices as $value=>$title){
                            ?>
                                <label>
                                    <input type="checkbox" name="tutor-course-filter-price" value="<?php echo $value; ?>"/>&nbsp;
                                    <?php echo $title; ?>
                                </label>
                            <?php
                        }
                    ?>
                </div>
                <?php
            }
        ?>
    </div>
</div>