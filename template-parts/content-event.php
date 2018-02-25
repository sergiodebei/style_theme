<?php
/**
 * Template part for displaying events.
 * @package Malu theme
 */
?>

<?php 

    $dutch_months_short = array('jan','feb','mrt','apr','mei','jun','jul','aug','sep','okt','nov','dec');
    $dutch_months = array('januari','februari','maart','april','mei','juni','juli','augustus','september','oktober','november','december');

?>

<div class="fair" id="post-<?php the_ID(); ?>">
    <div class="f_date">
        <?php 
            $start_date = strtotime(get_field( "start_date" ));
            $end_date = strtotime(get_field( "end_date" ));
            $start_month_to_number = date('n', $start_date);
            $end_month_to_number = date('n', $end_date);
            if($start_month_to_number != $end_month_to_number){
                ?>
                    <p>
                        <?php echo date('d', $start_date); ?> <?php echo $dutch_months_short[$start_month_to_number - 1]; ?> - 
                        <?php echo date('d', $end_date); ?> <?php echo $dutch_months_short[$end_month_to_number - 1]; ?>
                    </p> 
                <?php 
            }else{
                ?>
                    <p><?php echo date('d', $start_date); ?> - 
                        <?php echo date('d', $end_date); ?> 
                        <?php echo $dutch_months[$start_month_to_number - 1]; ?>
                    </p> 
                <?php 
            }
        ?>
    
    </div>
    <div class="f_details">
        <div class="f_name">
            <p><?php the_title(); ?></p>
        </div>
        <div class="p_description">
            <p><?php the_content(); ?></p>
        </div>
    </div>
</div><!-- #event-## -->
