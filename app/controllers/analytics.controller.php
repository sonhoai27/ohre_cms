<?php
class AnalyticsController extends BaseController {

    function index()
    {
        $this->view->render("analytics/analytics.product");
        $this->renderView("main", "footer");
    }

    // handle
}
