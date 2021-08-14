<url>
    @if (! empty($tag->url))
    <loc>{{ url($tag->url) }}</loc>
    @endif
@if (count($tag->alternates))
@foreach ($tag->alternates as $alternate)
    <xhtml:link rel="alternate" hreflang="{{ $alternate->locale }}" href="{{ url($alternate->url) }}" />
    @endforeach
@endif
@if (! empty($tag->lastModificationDate))
    <lastmod>{{ $tag->lastModificationDate->format(DateTime::ATOM) }}</lastmod>
@endif
    @if (! empty($tag->changeFrequency))
    <changefreq>{{ $tag->changeFrequency }}</changefreq>
    @endif
@if (! empty($tag->priority))
    <priority>{{ number_format($tag->priority,1) }}</priority>
    @endif
@if (! empty($tag->image))
    <image:image>
            <image:loc>{{ $tag->image['loc'] }}</image:loc>
            <image:caption>{!! html_entity_encode($tag->image['caption']) !!}</image:caption>
            <image:title>{!! html_entity_encode($tag->image['title']) !!}</image:title>
        </image:image>
    @endif
</url>
