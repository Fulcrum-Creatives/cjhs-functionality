<?php
/**
 * Alerts boxes
 */
class Alerts {
    /**
     * Class Constructor
     */
    public function __construct() {
    }
    /**
     * Output of the Alert boxes
     * @param  array $args User defined settings
     */
    public static function init( $args ){
        $defaults = array(
              'type'    => 'warning',
              'heading' => '',
              'message' => '',
          );
        $args = array_merge( $defaults, $args );
        extract( $args );
        switch( $type ){
            case 'error':
                echo '<div style="padding: 1em; background-color: #f5dfdf; border:solid 1px #ce9e9e; margin: 0.5em;" class="alert error">
                    <p style="margin-bottom: 0em; margin-top: 0em;"><strong>' . $heading . '</strong> ' . $message . '</p>
                </div>';
            break;
            case 'info':
                echo '<div style="padding: 1em; background-color: #dfeff5; border:solid 1px #9ebcce; margin: 0.5em;" class="alert info">
                    <p style="margin-bottom: 0em; margin-top: 0em;"><strong>' . $heading . '</strong> ' . $message . '</p>
                </div>';
            break;
            case 'success':
                echo '<div style="padding: 1em; background-color: #e8f5df; border:solid 1px #9ece9e; margin: 0.5em;" class="alert success">
                    <p style="margin-bottom: 0em; margin-top: 0em;"><strong>' . $heading . '</strong> ' . $message . '</p>
                </div>';
            break;
            case 'warning':
            default:
                echo '<div style="padding: 1em; background-color: #f8fad5; border:solid 1px #e5d35b; margin: 0.5em;"  class="alert warning">
                    <p style="margin-bottom: 0em; margin-top: 0em;"><strong>' . $heading . '</strong> ' . $message . '</p>
                </div>';
            break;
        }
        
    }
}