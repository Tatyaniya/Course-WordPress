<?php

class Wayup_Custom_Search_Widget extends WP_Widget {
	/**
	 * General Setup 
	 */
	public function __construct() {
	
		/* Widget settings. */
		$widget_ops = array(
			'classname' => 'wayup_custom_search_widget', 
			'description' => 'Виджет, который выводит поиск по новостям'
		);
		/* Widget control settings. */
		$control_ops = array(
			'width'		=> 500, 
			'height'	=> 450, 
			'id_base'	=> 'wayup_custom_search_widget' 
		);
		/* Create the widget. */
		parent::__construct( 'wayup_custom_search_widget', 'Wayup | Персональный поиск', $widget_ops, $control_ops );
	}
	/**
	 * Display Widget
	 * @param array $args
	 * @param array $instance 
	 */
	public function widget( $args, $instance ) 
	{
		extract( $args );
		
        $custom_placeholder = $instance['custom_placeholder'];
        $custom_post_type = $instance['custom_post_type'];
		
        // Display Widget
        ?> 

        <div class="widget widget-custom-search">
            <form role="search" method="get" id="searchform" action="<?php home_url('/'); ?>">
                    
                <input class="text-search" type="search" name="s" value="" placeholder="<?php echo $custom_placeholder; ?>">
                <input type="hidden" name="post_type" value="<?php echo $custom_post_type; ?>">
                <input type="submit" class="submit-search" value="" />
            
            </form>
        </div>

		<?php
	}
	/**
	 * Update Widget - отвечает за сохранение
	 * @param array $new_instance
	 * @param array $old_instance
	 * @return array 
	 */
	public function update( $new_instance, $old_instance ) 
	{
		$instance = $old_instance;
		
        $instance['custom_placeholder'] = strip_tags( $new_instance['custom_placeholder'] );
        $instance['custom_post_type'] = strip_tags( $new_instance['custom_post_type'] );
        
		return $instance;
	}
	
	/**
	 * Создание формы виджета в админке
	 * @param array $instance 
	 */
	public function form( $instance ) 
	{
		//default widget settings.
		$defaults = array(
            'custom_placeholder'		=> 'Поиск по новостям',
            'custom_post_type'		=> 'news',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); 
		
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'custom_placeholder' ); ?>">Плейсхолдер</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'custom_placeholder' ); ?>" name="<?php echo $this->get_field_name( 'custom_placeholder' ); ?>" value="<?php echo $instance['custom_placeholder']; ?>" />
        </p>
        <p>
			<label for="<?php echo $this->get_field_id( 'custom_post_type' ); ?>">Категория</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'custom_post_type' ); ?>" name="<?php echo $this->get_field_name( 'custom_post_type' ); ?>" value="<?php echo $instance['custom_post_type']; ?>" />
		</p>
	<?php
	}
}