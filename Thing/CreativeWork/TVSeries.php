<?php

namespace Bordeux\SchemaOrg\Thing\CreativeWork;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/TVSeries
 *
 *
 * -------------------------------- Actor ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Person Actor
 *
 * @method \Bordeux\SchemaOrg\Thing\Person getActor() A cast member of the movie, tv/radio series, season, episode, or video.
 *
 * @method TVSeries setActor(\Bordeux\SchemaOrg\Thing\Person $actor )A cast member of the movie, tv/radio series, season, episode, or video.
 *
 *
 * -------------------------------- Actors ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Person Actors
 *
 * @method \Bordeux\SchemaOrg\Thing\Person getActors() A cast member of the movie, tv/radio series, season, episode, or video. (legacy spelling; see singular form, actor)
 *
 * @method TVSeries setActors(\Bordeux\SchemaOrg\Thing\Person $actors )A cast member of the movie, tv/radio series, season, episode, or video. (legacy spelling; see singular form, actor)
 *
 *
 * -------------------------------- Director ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Person Director
 *
 * @method \Bordeux\SchemaOrg\Thing\Person getDirector() The director of the movie, tv/radio episode or series.
 *
 * @method TVSeries setDirector(\Bordeux\SchemaOrg\Thing\Person $director )The director of the movie, tv/radio episode or series.
 *
 *
 * -------------------------------- Directors ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Person Directors
 *
 * @method \Bordeux\SchemaOrg\Thing\Person getDirectors() The director of the movie, tv/radio episode or series. (legacy spelling; see singular form, director)
 *
 * @method TVSeries setDirectors(\Bordeux\SchemaOrg\Thing\Person $directors )The director of the movie, tv/radio episode or series. (legacy spelling; see singular form, director)
 *
 *
 * -------------------------------- EndDate ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime EndDate
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime getEndDate() The end date and time of the event or item (in ISO 8601 date format).
 *
 * @method TVSeries setEndDate(\Bordeux\SchemaOrg\SchemaDateTime $endDate )The end date and time of the event or item (in ISO 8601 date format).
 *
 *
 * -------------------------------- Episode ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\Episode Episode
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\Episode getEpisode() An episode of a TV/radio series or season
 *
 * @method TVSeries setEpisode(\Bordeux\SchemaOrg\Thing\CreativeWork\Episode $episode )An episode of a TV/radio series or season
 *
 *
 * -------------------------------- Episodes ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\Episode Episodes
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\Episode getEpisodes() An episode of a TV/radio series or season (legacy spelling; see singular form, episode)
 *
 * @method TVSeries setEpisodes(\Bordeux\SchemaOrg\Thing\CreativeWork\Episode $episodes )An episode of a TV/radio series or season (legacy spelling; see singular form, episode)
 *
 *
 * -------------------------------- MusicBy ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup MusicBy
 *
 * @method \Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup getMusicBy() The composer of the movie or TV/radio soundtrack.
 *
 * @method TVSeries setMusicBy(\Bordeux\SchemaOrg\Thing\Person $musicBy ) setMusicBy(\Bordeux\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup $musicBy )The composer of the movie or TV/radio soundtrack.
 *
 *
 * -------------------------------- NumberOfEpisodes ---------------------------------------------
 *
 * @property Number NumberOfEpisodes
 *
 * @method Number getNumberOfEpisodes() The number of episodes in this season or series.
 *
 * @method TVSeries setNumberOfEpisodes(Number $numberOfEpisodes )The number of episodes in this season or series.
 *
 *
 * -------------------------------- NumberOfSeasons ---------------------------------------------
 *
 * @property Number NumberOfSeasons
 *
 * @method Number getNumberOfSeasons() The number of seasons in this series.
 *
 * @method TVSeries setNumberOfSeasons(Number $numberOfSeasons )The number of seasons in this series.
 *
 *
 * -------------------------------- Producer ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Person Producer
 *
 * @method \Bordeux\SchemaOrg\Thing\Person getProducer() The producer of the movie, tv/radio series, season, or episode, or video.
 *
 * @method TVSeries setProducer(\Bordeux\SchemaOrg\Thing\Person $producer )The producer of the movie, tv/radio series, season, or episode, or video.
 *
 *
 * -------------------------------- ProductionCompany ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization ProductionCompany
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization getProductionCompany() The production company or studio that made the movie, tv/radio series, season, or episode, or media object.
 *
 * @method TVSeries setProductionCompany(\Bordeux\SchemaOrg\Thing\Organization $productionCompany )The production company or studio that made the movie, tv/radio series, season, or episode, or media object.
 *
 *
 * -------------------------------- Season ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\Season Season
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\Season getSeason() A season in a tv/radio series.
 *
 * @method TVSeries setSeason(\Bordeux\SchemaOrg\Thing\CreativeWork\Season $season )A season in a tv/radio series.
 *
 *
 * -------------------------------- Seasons ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\Season Seasons
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\Season getSeasons() A season in a tv/radio series. (legacy spelling; see singular form, season)
 *
 * @method TVSeries setSeasons(\Bordeux\SchemaOrg\Thing\CreativeWork\Season $seasons )A season in a tv/radio series. (legacy spelling; see singular form, season)
 *
 *
 * -------------------------------- StartDate ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime StartDate
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime getStartDate() The start date and time of the event or item (in ISO 8601 date format).
 *
 * @method TVSeries setStartDate(\Bordeux\SchemaOrg\SchemaDateTime $startDate )The start date and time of the event or item (in ISO 8601 date format).
 *
 *
 * -------------------------------- Trailer ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject Trailer
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject getTrailer() The trailer of a movie or tv/radio series, season, or episode.
 *
 * @method TVSeries setTrailer(\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject $trailer )The trailer of a movie or tv/radio series, season, or episode.
 *
 *
 */
class TVSeries extends \Bordeux\SchemaOrg\Thing\CreativeWork
{
}
