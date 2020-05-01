@php
    /**
     * @var Webkul\Product\Models\ProductFlat $product
     * @var string $message
     */
    $url = route('shop.productOrCategory.index', $product->url_key);
    $twitter_url = 'https://twitter.com/intent/tweet?' . http_build_query([
        'url' => $url,
        'text' => $message,
    ]);
@endphp

<twitter-share></twitter-share>

@push('css')
    <style>
        .bb-social--twitter a svg > path {
            fill: #1DA1F2;
        }
    </style>
@endpush

@push('scripts')
    <script type="text/x-template" id="twitter-share-link">
        <li class="bb-social-share__item bb-social--twitter">
            <a href="#" @click="openSharePopup">
                @include('social_share::icons.twitter')
            </a>
        </li>
    </script>

    <script type="text/javascript">
        Vue.component('twitter-share', {
            template: '#twitter-share-link',
            data: function () {
                return {
                    shareUrl: '{{ $twitter_url }}'
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