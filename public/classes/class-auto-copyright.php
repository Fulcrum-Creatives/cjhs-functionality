<?php
/**
 * Automatiacly set the copyright years
 */
class CJHS_Auto_Copyright {
    /**
     * Creates a copywrite based on the first published post through the current year
     *
     * @param int $year The first year of the copyright
     */
    public static function init( $year = 'auto' ){
        switch($year){
            // If auto is set
            case ( intval( $year ) == 'auto' ):
                $year = date( 'Y' );
                echo intval( $year );
            break;
            // If current year is set
            case ( intval( $year ) == date( 'Y' ) ):
                echo intval( $year );
            break;
            // If a future year is set
            case ( intval( $year ) < date( 'Y' ) ):
                echo intval( $year ) . ' - ' . date( 'Y' );
            break;
            // If a past year isset
            case ( intval( $year ) > date( 'Y' ) ):
                echo date( 'Y' );
            break;
            // Deafult Case
            default:
                $year = date( 'Y' );
            break;
        }
    } 
}