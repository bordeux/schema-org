<?php

namespace Bordeux\SchemaOrg\Thing\CreativeWork;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/MusicRecording
 *
 *
 * -------------------------------- ByArtist ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup ByArtist
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup getByArtist() The artist that performed this album or recording.
 *
 * @method MusicRecording setByArtist(\Bordeux\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup $byArtist )The artist that performed this album or recording.
 *
 *
 * -------------------------------- Duration ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration Duration
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration getDuration() The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
 *
 * @method MusicRecording setDuration(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration $duration )The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
 *
 *
 * -------------------------------- InAlbum ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum InAlbum
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum getInAlbum() The album to which this recording belongs.
 *
 * @method MusicRecording setInAlbum(\Bordeux\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum $inAlbum )The album to which this recording belongs.
 *
 *
 * -------------------------------- InPlaylist ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\MusicPlaylist InPlaylist
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\MusicPlaylist getInPlaylist() The playlist to which this recording belongs.
 *
 * @method MusicRecording setInPlaylist(\Bordeux\SchemaOrg\Thing\CreativeWork\MusicPlaylist $inPlaylist )The playlist to which this recording belongs.
 *
 *
 */
class MusicRecording extends \Bordeux\SchemaOrg\Thing\CreativeWork
{
}
