<x-front-layout>

    <x-page-banner slug="{{ $slug }}" title="{{ $slug }}" description="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged." bannerBg="public/images/2022/08/banner-bg-2.png" bannerBtnBg="public/images/2022/08/cart-btn.svg" bannerImg="public/images/2022/08/banner-1.png">
    </x-page-banner>

    <x-blog name="" title="" description="" category="" image="" ref1=""></x-blog>
</x-front-layout>
<script>
    jQuery(document).ready(function($) {
        $('.tab-menu-round').children('a').click(function() {
            $('.w-tab-link').removeClass('w--current');
            $(this).addClass('w--current');
        });

        $('#w-tabs-0-data-w-tab-1').click(function() {
            $('.w-tab-pane').addClass('d-none');
            $('.w-tab-pane1').removeClass('d-none');

        });

        $('#w-tabs-0-data-w-tab-2').click(function() {
            $('.w-tab-pane').addClass('d-none');
            $('.w-tab-pane2').removeClass('d-none');

        });

        $('#w-tabs-0-data-w-tab-3').click(function() {
            $('.w-tab-pane').addClass('d-none');
            $('.w-tab-pane3').removeClass('d-none');

        });

        $('#w-tabs-0-data-w-tab-4').click(function() {
            $('.w-tab-pane').addClass('d-none');
            $('.w-tab-pane4').removeClass('d-none');

        });
        $('#w-tabs-0-data-w-tab-5').click(function() {
            $('.w-tab-pane').addClass('d-none');
            $('.w-tab-pane5').removeClass('d-none');

        });
    });
</script>