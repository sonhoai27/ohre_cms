<?php

class Pagination {
    private $num;
    private $rows;
    private $page;
    private $targetpage;
    public function __construct($num, $rows,$page,$targetpage)
    {
        $this->num = $num;
        $this->rows = $rows;
        $this->page = $page;
        $this->targetpage = $targetpage;
    }

    function pagi(){
        $adjacents = 3;
        $total_pages = ceil($this->rows / $this->num);
        /* Setup vars for query. */
        if ($this->page == 0){
            $this->page = 1;
        }
            //if no page var is given, default to 1.
        $prev = $this->page - 1;                            //previous page is page - 1
        $next = $this->page + 1;
        //next page is page + 1
        $lpm1 = $total_pages - 1;                    //last page minus 1
        $pagination = "";
        if ($total_pages > 1) {
            $pagination .= "<ul class='pagination justify-content-center pagination-separate pagination-curved pagination-flat'>";
            //previous button
            if ($this->page > 1)
            {
                $pagination .= "<li class='page-item'><a class='page-link' href='$this->targetpage?page=$prev'>«</a></li>";
            }
            else
            {
                $pagination .= "<li class='page-item'><a class='page-link'>«</a></li>";
            }

            //pages
            if ($total_pages < 7 + ($adjacents * 2))    //not enough pages to bother breaking it up
            {
                for ($counter = 1; $counter <= $total_pages; $counter++) {
                    if ($counter == $this->page)
                    {
                        $pagination .= "<li class='page-item active'><a class='page-link'>$counter</a></li>";
                    }
                    else
                    {
                        $pagination .= "<li class='page-item'><a class='page-link' href='$this->targetpage?page=$counter'>$counter</a></li>";
                    }
                }
            } elseif ($total_pages > 5 + ($adjacents * 2))    //enough pages to hide some
            {
                //close to beginning; only hide later pages
                if ($this->page < 1 + ($adjacents * 2)) {
                    for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
                        if ($counter == $this->page)
                        {
                            $pagination .= "<li class='page-item active'><a class='page-link'>$counter</a></li>";
                        }
                        else
                        {
                            $pagination .= "<li class='page-item'><a class='page-link' href='$this->targetpage?page=$counter'>$counter</a></li>";
                        }
                    }
                    $pagination .= "...";
                    $pagination .= "<li class='page-item'><a class='page-link' href='$this->targetpage?page=$lpm1'>$lpm1</a></li>";
                    $pagination .= "<li class='page-item'><a class='page-link' href='$this->targetpage?page=$total_pages'>$total_pages</a></li>";
                } //in middle; hide some front and some back
                elseif ($total_pages - ($adjacents * 2) > $this->page && $this->page > ($adjacents * 2)) {
                    $pagination .= "<li class='page-item'><a class='page-link' href='$this->targetpage?page=1'>1</a></li>";
                    $pagination .= "<li class='page-item'><a class='page-link' href='$this->targetpage?page=2'>2</a></li>";
                    $pagination .= "...";
                    for ($counter = $this->page - $adjacents; $counter <= $this->page + $adjacents; $counter++) {
                        if ($counter == $this->page)
                        {
                            $pagination .= "<li class='page-item active'><a class='page-link'>$counter</a></li>";
                        }
                        else
                        {
                            $pagination .= "<li class='page-item'><a class='page-link' href='$this->targetpage?page=$counter'>$counter</a></li>";
                        }
                    }
                    $pagination .= "...";
                    $pagination .= "<li class='page-item'><a class='page-link' href='$this->targetpage?page=$lpm1'>$lpm1</a></li>";
                    $pagination .= "<li class='page-item'><a class='page-link' href='$this->targetpage?page=$total_pages'>$total_pages</a></li>";
                }
                //close to end; only hide early pages
                else {
                    $pagination .= "<li class='page-item'><a class='page-link' href='$this->targetpage?page=1'>1</a></li>";
                    $pagination .= "<li class='page-item'><a class='page-link' href='$this->targetpage?page=2'>2</a></li>";
                    $pagination .= "...";
                    for ($counter = $total_pages - (2 + ($adjacents * 2)); $counter <= $total_pages; $counter++) {
                        if ($counter == $this->page)
                        {
                            $pagination .= "<li class='page-item active'><a class='page-link'>$counter</a></li>";
                        }
                        else
                        {
                            $pagination .= "<li class='page-item'><a class='page-link' href='$this->targetpage?page=$counter'>$counter</a></li>";
                        }
                    }
                }
            }

            //next button
            if ($this->page <= ($total_pages - 1))
            {
                $pagination .= "<li class='page-item'><a class='page-link' href='$this->targetpage?page=$next'>»</a></li>";
            }
            else
            {
                $pagination .= "<li class='page-item'><a class='page-link'>»</a></li>";
            }
            $pagination .= "</ul>";
        }

        return $pagination;
    }
}