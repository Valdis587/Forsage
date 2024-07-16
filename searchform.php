<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" class="sidebar__widget-search">
            <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск..." class="sidebar__widget-search-input" >
            <button aria-label="search" type="submit" id="searchsubmit" class="sidebar__widget-search-button"><i class="icon-search"></i></button>
        </form>