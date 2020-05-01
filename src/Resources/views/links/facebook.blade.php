@php
    /**
     * @var Webkul\Product\Models\ProductFlat $product
     * @var string $message
     */
    $url = urlencode(route('shop.productOrCategory.index', $product->url_key));
    $facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $url;
@endphp

<facebook-share></facebook-share>

@push('css')
    <style>
        .bb-social--facebook a svg > path {
            fill: #3b5998;
        }
    </style>
@endpush

@push('scripts')
    <script type="text/x-template" id="facebook-share-link">
        <li class="bb-social-share__item bb-social--facebook">
            <a href="#" @click="openSharePopup">
                @include('social_share::icons.facebook')
            </a>
        </li>
    </script>

    <script type="text/javascript">
        Vue.component('facebook-share', {
            template: '#facebook-share-link',
            data: function () {
                return {
                    shareUrl: '{{ $facebook_url }}'
                }
            },
            methods: {
                openSharePopup: function () {
                    window.open(this.shareUrl, '_blank', 'resizable=yes,top=500,left=500,width=500,height=500')
                }
            }
        });
    </script>
@endpush