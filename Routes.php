<?php

Route::set('about', function()
{
    AboutUs::CreateView('AboutUsView');
});

Route::set('sales', function()
{
    OurSales::CreateView('OurSalesView');
});

?>