<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function index()
	{
		/*
		  setting up the parameters for calendar
		*/
		$config = array(
	        'start_day'    => 'saturday', #choosing the start day
	        'month_type'   => 'long', #month name type
	        'day_type'     => 'short', #day name type {long = monday , short = mon , abr = mo(default) }
	        'show_next_prev'  => TRUE, # for showing the next and previous months url links
    		'next_prev_url'   => 'http://localhost/ci-calendar/index.php/calendar/index/' #redirection url for next and previous months
		);

		/*
		  adding html template to calendar  
		*/
		$config['template'] = '

        {table_open}<table border="0" cellpadding="" cellspacing="0" class="calendarTable">{/table_open}

        {heading_row_start}<thead><tr class="headingRow">{/heading_row_start}

        {heading_previous_cell}<th><a href="{previous_url}">&laquo;Prev</a></th>{/heading_previous_cell}
        {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
        {heading_next_cell}<th><a href="{next_url}">Next&raquo;</a></th>{/heading_next_cell}

        {heading_row_end}</tr>{/heading_row_end}

        {week_row_start}<tr class="weekdays">{/week_row_start}
        {week_day_cell}<td>{week_day}</td>{/week_day_cell}
        {week_row_end}</tr></thead><tbody>{/week_row_end}

        {cal_row_start}<tr>{/cal_row_start}
        {cal_cell_start}<td>{/cal_cell_start}
        {cal_cell_start_today}<td>{/cal_cell_start_today}
        {cal_cell_start_other}<td class="other-month">{/cal_cell_start_other}

        {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
        {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

        {cal_cell_no_content}{day}{/cal_cell_no_content}
        {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

        {cal_cell_blank}&nbsp;{/cal_cell_blank}

        {cal_cell_other}{day}{/cal_cel_other}

        {cal_cell_end}</td>{/cal_cell_end}
        {cal_cell_end_today}</td>{/cal_cell_end_today}
        {cal_cell_end_other}</td>{/cal_cell_end_other}
        {cal_row_end}</tr>{/cal_row_end}

        {table_close}</tbody></table>{/table_close}';


		/*
		  first step is to load the calendar library.
		*/
		$this->load->library('calendar',$config);

		/* fetching the year and month for next and prev month*/
		$year = $this->uri->segment(3);
		$month = $this->uri->segment(4);
		

		/*
		  this function generates calendar which can be print on view page 
		*/
		$data['cal'] = $this->calendar->generate($year,$month);
		

		$this->load->view('home',$data);
	}



}
