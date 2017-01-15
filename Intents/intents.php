<?php
$intents = new stdclass();
$intents->categories = array();
$intents->categories[0] = new stdclass();
$intents->categories[0]->category = 'Books';
$intents->categories[0]->entities = array();
$intents->categories[0]->entities[0] = new stdclass();
$intents->categories[0]->entities[0]->entity = 'Book';
$intents->categories[0]->entities[0]->signatures = array();
$intents->categories[0]->entities[0]->signatures[] = array('name'=>'AMAZON.AddAction<object@Book,targetCollection@ReadingList>'); 
$intents->categories[0]->entities[0]->signatures[] = array('name'=>'AMAZON.ChooseAction<object@Book,sourceCollection@ReadingList>');
$intents->categories[0]->entities[0]->signatures[] = array('name'=>'AMAZON.ChooseAction<object@Book>');
$intents->categories[0]->entities[0]->signatures[] = array('name'=>'AMAZON.DeleteAction<object@Book,sourceCollection@ReadingList>');
$intents->categories[0]->entities[0]->signatures[] = array('name'=>'AMAZON.PlaybackAction<object@Book>');
$intents->categories[0]->entities[0]->signatures[] = array('name'=>'AMAZON.RateAction<object@Book>');
$intents->categories[0]->entities[0]->signatures[] = array('name'=>'AMAZON.RestartAction<object@Book>');
$intents->categories[0]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@Book>');
$intents->categories[0]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@Book[datePublished]>');
$intents->categories[0]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@Book[numberOfSections]>');
$intents->categories[0]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@Book[position]>');
$intents->categories[0]->entities[0]->signatures[] = array('name'=>'AMAZON.StopAction<object@Book>');
$intents->categories[0]->entities[0]->signatures[] = array('name'=>'AMAZON.SuspendAction<object@Book>');
$intents->categories[0]->entities[0]->slots = array();

$intents->categories[0]->entities[1] = new stdclass();
$intents->categories[0]->entities[1]->entity = 'BookSeries';
$intents->categories[0]->entities[1]->signatures = array();
$intents->categories[0]->entities[1]->signatures[] = array('name'=>'AMAZON.AddAction<object@BookSeries,targetCollection@ReadingList>');
$intents->categories[0]->entities[1]->signatures[] = array('name'=>'AMAZON.DeleteAction<object@BookSeries,sourceCollection@ReadingList>');

$intents->categories[0]->entities[2] = new stdclass();
$intents->categories[0]->entities[2]->entity = 'CreativeWork';
$intents->categories[0]->entities[2]->signatures = array();
$intents->categories[0]->entities[2]->signatures[] = array('name'=>'AMAZON.ChooseAction<object@CreativeWork>');
$intents->categories[0]->entities[2]->signatures[] = array('name'=>'AMAZON.SearchAction<object@CreativeWork>');
$intents->categories[0]->entities[2]->signatures[] = array('name'=>'AMAZON.SearchAction<object@CreativeWork[name]>');

$intents->categories[0]->entities[3] = new stdclass();
$intents->categories[0]->entities[3]->entity = 'CreativeWorkSection';
$intents->categories[0]->entities[3]->signatures = array();
$intents->categories[0]->entities[3]->signatures[] = array('name'=>'AMAZON.CloseAction<object@CreativeWorkSection>');
$intents->categories[0]->entities[3]->signatures[] = array('name'=>'AMAZON.PlaybackAction<object@CreativeWorkSection>');
$intents->categories[0]->entities[3]->signatures[] = array('name'=>'AMAZON.RestartAction<object@CreativeWorkSection>');
$intents->categories[0]->entities[3]->signatures[] = array('name'=>'AMAZON.ResumeAction<object@CreativeWorkSection>');
$intents->categories[0]->entities[3]->signatures[] = array('name'=>'AMAZON.SearchAction<object@CreativeWorkSection>');
$intents->categories[0]->entities[3]->signatures[] = array('name'=>'AMAZON.SearchAction<object@CreativeWorkSection[name]>');
$intents->categories[0]->entities[3]->signatures[] = array('name'=>'AMAZON.StartAction<object@CreativeWorkSection>');
$intents->categories[0]->entities[3]->signatures[] = array('name'=>'AMAZON.SuspendAction<object@CreativeWorkSection>');

$intents->categories[0]->entities[4] = new stdclass();
$intents->categories[0]->entities[4]->entity = '';
$intents->categories[0]->entities[4]->signatures = array();
$intents->categories[0]->entities[4]->signatures[] = array('name'=>'AMAZON.AddAction<object@Book,targetCollection@ReadingList>');
$intents->categories[0]->entities[4]->signatures[] = array('name'=>'AMAZON.AddAction<object@BookSeries,targetCollection@ReadingList>');
$intents->categories[0]->entities[4]->signatures[] = array('name'=>'AMAZON.ChooseAction<object@Book,sourceCollection@ReadingList>');
$intents->categories[0]->entities[4]->signatures[] = array('name'=>'AMAZON.CreateAction<object@ReadingList>');
$intents->categories[0]->entities[4]->signatures[] = array('name'=>'AMAZON.DeleteAction<object@Book,sourceCollection@ReadingList>');
$intents->categories[0]->entities[4]->signatures[] = array('name'=>'AMAZON.DeleteAction<object@BookSeries,sourceCollection@ReadingList>');
$intents->categories[0]->entities[4]->signatures[] = array('name'=>'AMAZON.DeleteAction<object@ReadingList>');

$intents->categories[1] = new stdclass();
$intents->categories[1]->category = 'Calendar';
$intents->categories[1]->entities = array();
$intents->categories[1]->entities[0] = new stdclass();
$intents->categories[1]->entities[0]->entity = 'Calendar';
$intents->categories[1]->entities[0]->signatures = array();
$intents->categories[1]->entities[0]->signatures[] = array('name'=>'AMAZON.ReadAction<object@Calendar>');
$intents->categories[1]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@Calendar>');

$intents->categories[1]->entities[1] = new stdclass();
$intents->categories[1]->entities[1]->entity = 'Event';
$intents->categories[1]->entities[1]->signatures = array();
$intents->categories[1]->entities[1]->signatures[] = array('name'=>'AMAZON.AddAction<object@Event>');
$intents->categories[1]->entities[1]->signatures[] = array('name'=>'AMAZON.ChooseAction<object@Event>');
$intents->categories[1]->entities[1]->signatures[] = array('name'=>'AMAZON.DeleteAction<object@Event>');
$intents->categories[1]->entities[1]->signatures[] = array('name'=>'AMAZON.ReplaceAction<object@Event>');
$intents->categories[1]->entities[1]->signatures[] = array('name'=>'AMAZON.SearchAction<object@Event>');
$intents->categories[1]->entities[1]->signatures[] = array('name'=>'AMAZON.SearchAction<object@Event[eventStatus]>');
$intents->categories[1]->entities[1]->signatures[] = array('name'=>'AMAZON.SearchAction<object@Event[location]>');
$intents->categories[1]->entities[1]->signatures[] = array('name'=>'AMAZON.SearchAction<object@Event[startDate]>');


$intents->categories[2] = new stdclass();
$intents->categories[2]->category = 'Cinema Showtimes';
$intents->categories[2]->entities = array();
$intents->categories[2]->entities[0] = new stdclass();
$intents->categories[2]->entities[0]->entity = 'ScreeningEvent';
$intents->categories[2]->entities[0]->signatures = array();
$intents->categories[2]->entities[0]->signatures[] = array('name'=>'AMAZON.ChooseAction<object@ScreeningEvent[location]>');
$intents->categories[2]->entities[0]->signatures[] = array('name'=>'AMAZON.ChooseAction<object@ScreeningEvent[workPresented]>');
$intents->categories[2]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@ScreeningEvent>');
$intents->categories[2]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@ScreeningEvent[location]>');


$intents->categories[3] = new stdclass();
$intents->categories[3]->category = 'General';
$intents->categories[3]->entities = array();
$intents->categories[3]->entities[0] = new stdclass();
$intents->categories[3]->entities[0]->entity = 'CreativeWor';
$intents->categories[3]->entities[0]->signatures = array();
$intents->categories[3]->entities[0]->signatures[] = array('name'=>'AMAZON.ChooseAction<object@CreativeWork>');
$intents->categories[3]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@CreativeWork>');
$intents->categories[3]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@CreativeWork[name]>');

$intents->categories[3]->entities[1] = new stdclass();
$intents->categories[3]->entities[1]->entity = 'CreativeWorkSection';
$intents->categories[3]->entities[1]->signatures = array();
$intents->categories[3]->entities[1]->signatures[] = array('name'=>'AMAZON.CloseAction<object@CreativeWorkSection>');
$intents->categories[3]->entities[1]->signatures[] = array('name'=>'AMAZON.PlaybackAction<object@CreativeWorkSection>');
$intents->categories[3]->entities[1]->signatures[] = array('name'=>'AMAZON.RestartAction<object@CreativeWorkSection>');
$intents->categories[3]->entities[1]->signatures[] = array('name'=>'AMAZON.ResumeAction<object@CreativeWorkSection>');
$intents->categories[3]->entities[1]->signatures[] = array('name'=>'AMAZON.SearchAction<object@CreativeWorkSection>');
$intents->categories[3]->entities[1]->signatures[] = array('name'=>'AMAZON.SearchAction<object@CreativeWorkSection[name]>');
$intents->categories[3]->entities[1]->signatures[] = array('name'=>'AMAZON.StartAction<object@CreativeWorkSection>');
$intents->categories[3]->entities[1]->signatures[] = array('name'=>'AMAZON.SuspendAction<object@CreativeWorkSection>');

$intents->categories[3]->entities[2] = new stdclass();
$intents->categories[3]->entities[2]->entity = 'Thing';
$intents->categories[3]->entities[2]->signatures = array();
$intents->categories[3]->entities[2]->signatures[] = array('name'=>'AMAZON.CloseAction<object@Thing>');
$intents->categories[3]->entities[2]->signatures[] = array('name'=>'AMAZON.DeactivateAction<object@Thing>');
$intents->categories[3]->entities[2]->signatures[] = array('name'=>'AMAZON.DeleteAction<object@Thing>');
$intents->categories[3]->entities[2]->signatures[] = array('name'=>'AMAZON.IgnoreAction<object@Thing>');
$intents->categories[3]->entities[2]->signatures[] = array('name'=>'AMAZON.MuteAction<object@Thing>');


$intents->categories[4] = new stdclass();
$intents->categories[4]->category = 'Local Search';
$intents->categories[4]->entities = array();
$intents->categories[4]->entities[0] = new stdclass();
$intents->categories[4]->entities[0]->entity = 'LocalBusiness';
$intents->categories[4]->entities[0]->signatures = array();
$intents->categories[4]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@LocalBusiness>');
$intents->categories[4]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@LocalBusiness[openHours.closes]>');
$intents->categories[4]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@LocalBusiness[openHours]>');
$intents->categories[4]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@LocalBusiness[telephone]>');


$intents->categories[5] = new stdclass();
$intents->categories[5]->category = 'Music';
$intents->categories[5]->entities = array();
$intents->categories[5]->entities[0] = new stdclass();
$intents->categories[5]->entities[0]->entity = 'Catalog';
$intents->categories[5]->entities[0]->signatures = array();
$intents->categories[5]->entities[0]->signatures[] = array('name'=>'AMAZON.DeleteAction<object@MusicPlaylist,sourceCollection@Catalog>');

$intents->categories[5]->entities[1] = new stdclass();
$intents->categories[5]->entities[1]->entity = 'MusicCreativeWork';
$intents->categories[5]->entities[1]->signatures = array();
$intents->categories[5]->entities[1]->signatures[] = array('name'=>'AMAZON.AddAction<object@MusicCreativeWork,targetCollection@MusicPlaylist>');
$intents->categories[5]->entities[1]->signatures[] = array('name'=>'AMAZON.ChooseAction<object@MusicCreativeWork,sourceCollection@MusicPlaylist>');
$intents->categories[5]->entities[1]->signatures[] = array('name'=>'AMAZON.ChooseAction<object@MusicCreativeWork>');
$intents->categories[5]->entities[1]->signatures[] = array('name'=>'AMAZON.CreateAction<object@MusicPlaylist,content@MusicCreativeWork>');
$intents->categories[5]->entities[1]->signatures[] = array('name'=>'AMAZON.DeleteAction<object@MusicCreativeWork,sourceCollection@MusicPlaylist>');
$intents->categories[5]->entities[1]->signatures[] = array('name'=>'AMAZON.DeleteAction<object@MusicCreativeWork>');
$intents->categories[5]->entities[1]->signatures[] = array('name'=>'AMAZON.PlaybackAction<object@MusicCreativeWork>');
$intents->categories[5]->entities[1]->signatures[] = array('name'=>'AMAZON.RepeatAction<object@MusicCreativeWork>');
$intents->categories[5]->entities[1]->signatures[] = array('name'=>'AMAZON.ResumeAction<object@MusicCreativeWork>');
$intents->categories[5]->entities[1]->signatures[] = array('name'=>'AMAZON.SearchAction<object@MusicCreativeWork>');
$intents->categories[5]->entities[1]->signatures[] = array('name'=>'AMAZON.SearchAction<object@MusicCreativeWork[byArtist]>');
$intents->categories[5]->entities[1]->signatures[] = array('name'=>'AMAZON.StartAction<object@MusicCreativeWork>');
$intents->categories[5]->entities[1]->signatures[] = array('name'=>'AMAZON.StopAction<object@MusicCreativeWork>');
$intents->categories[5]->entities[1]->signatures[] = array('name'=>'AMAZON.SuspendAction<object@MusicCreativeWork>');

$intents->categories[5]->entities[2] = new stdclass();
$intents->categories[5]->entities[2]->entity = 'MusicGroup';
$intents->categories[5]->entities[2]->signatures = array();
$intents->categories[5]->entities[2]->signatures[] = array('name'=>'AMAZON.SearchAction<object@MusicGroup>');
$intents->categories[5]->entities[2]->signatures[] = array('name'=>'AMAZON.SearchAction<object@MusicGroup[musicGroupMember]>');

$intents->categories[5]->entities[3] = new stdclass();
$intents->categories[5]->entities[3]->entity = 'MusicPlaylist';
$intents->categories[5]->entities[3]->signatures = array();
$intents->categories[5]->entities[3]->signatures[] = array('name'=>'AMAZON.AddAction<object@MusicCreativeWork,targetCollection@MusicPlaylist>');
$intents->categories[5]->entities[3]->signatures[] = array('name'=>'AMAZON.ChooseAction<object@MusicCreativeWork,sourceCollection@MusicPlaylist>');
$intents->categories[5]->entities[3]->signatures[] = array('name'=>'AMAZON.ChooseAction<object@MusicPlaylist>');
$intents->categories[5]->entities[3]->signatures[] = array('name'=>'AMAZON.CreateAction<object@MusicPlaylist,content@MusicCreativeWork>');
$intents->categories[5]->entities[3]->signatures[] = array('name'=>'AMAZON.CreateAction<object@MusicPlaylist>');
$intents->categories[5]->entities[3]->signatures[] = array('name'=>'AMAZON.DeleteAction<object@MusicCreativeWork,sourceCollection@MusicPlaylist>');
$intents->categories[5]->entities[3]->signatures[] = array('name'=>'AMAZON.DeleteAction<object@MusicPlaylist,sourceCollection@Catalog>');
$intents->categories[5]->entities[3]->signatures[] = array('name'=>'AMAZON.DeleteAction<object@MusicPlaylist>');
$intents->categories[5]->entities[3]->signatures[] = array('name'=>'AMAZON.PlaybackAction<object@MusicPlaylist>');
$intents->categories[5]->entities[3]->signatures[] = array('name'=>'AMAZON.SearchAction<object@MusicPlaylist[tracks]>');

$intents->categories[5]->entities[4] = new stdclass();
$intents->categories[5]->entities[4]->entity = 'MusicRecording';
$intents->categories[5]->entities[4]->signatures = array();
$intents->categories[5]->entities[4]->signatures[] = array('name'=>'AMAZON.SearchAction<object@MusicRecording[byArtist.musicGroupMember]>');
$intents->categories[5]->entities[4]->signatures[] = array('name'=>'AMAZON.SearchAction<object@MusicRecording[byArtist]>');
$intents->categories[5]->entities[4]->signatures[] = array('name'=>'AMAZON.SearchAction<object@MusicRecording[duration]>');
$intents->categories[5]->entities[4]->signatures[] = array('name'=>'AMAZON.SearchAction<object@MusicRecording[inAlbum]>');
$intents->categories[5]->entities[4]->signatures[] = array('name'=>'AMAZON.SearchAction<object@MusicRecording[producer]>');

$intents->categories[5]->entities[5] = new stdclass();
$intents->categories[5]->entities[5]->entity = 'Musician';
$intents->categories[5]->entities[5]->signatures = array();
$intents->categories[5]->entities[5]->signatures[] = array('name'=>'AMAZON.LikeAction<object@Musician>');

$intents->categories[5]->entities[6] = new stdclass();
$intents->categories[5]->entities[6]->entity = 'PlaybackMode';
$intents->categories[5]->entities[6]->signatures = array();
$intents->categories[5]->entities[6]->signatures[] = array('name'=>'AMAZON.ActivateAction<object@PlaybackMode>');
$intents->categories[5]->entities[6]->signatures[] = array('name'=>'AMAZON.DeactivateAction<object@PlaybackMode>');

$intents->categories[5]->entities[7] = new stdclass();
$intents->categories[5]->entities[7]->entity = 'Singer';
$intents->categories[5]->entities[7]->signatures = array();
$intents->categories[5]->entities[7]->signatures[] = array('name'=>'AMAZON.SearchAction<object@Singer>');


$intents->categories[6] = new stdclass();
$intents->categories[6]->category = 'Video';
$intents->categories[6]->entities = array();
$intents->categories[6]->entities[0] = new stdclass();
$intents->categories[6]->entities[0]->entity = 'Actor';
$intents->categories[6]->entities[0]->signatures = array();
$intents->categories[6]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@Actor>');

$intents->categories[6]->entities[1] = new stdclass();
$intents->categories[6]->entities[1]->entity = 'CreativeWork';
$intents->categories[6]->entities[1]->signatures = array();
$intents->categories[6]->entities[1]->signatures[] = array('name'=>'AMAZON.ChooseAction<object@CreativeWork>');
$intents->categories[6]->entities[1]->signatures[] = array('name'=>'AMAZON.SearchAction<object@CreativeWork>');
$intents->categories[6]->entities[1]->signatures[] = array('name'=>'AMAZON.SearchAction<object@CreativeWork[name]>');

$intents->categories[6]->entities[2] = new stdclass();
$intents->categories[6]->entities[2]->entity = 'Episode';
$intents->categories[6]->entities[2]->signatures = array();
$intents->categories[6]->entities[2]->signatures[] = array('name'=>'AMAZON.ExitAction<object@Episode>');
$intents->categories[6]->entities[2]->signatures[] = array('name'=>'AMAZON.PlaybackAction<object@Episode>');
$intents->categories[6]->entities[2]->signatures[] = array('name'=>'AMAZON.SearchAction<object@Episode>');
$intents->categories[6]->entities[2]->signatures[] = array('name'=>'AMAZON.SearchAction<object@Episode[description]>');
$intents->categories[6]->entities[2]->signatures[] = array('name'=>'AMAZON.SuspendAction<object@Episode>');
$intents->categories[6]->entities[2]->signatures[] = array('name'=>'AMAZON.WatchAction<object@Episode>');

$intents->categories[6]->entities[3] = new stdclass();
$intents->categories[6]->entities[3]->entity = 'TVSeason';
$intents->categories[6]->entities[3]->signatures = array();
$intents->categories[6]->entities[3]->signatures[] = array('name'=>'AMAZON.PlaybackAction<object@TVSeason>');

$intents->categories[6]->entities[4] = new stdclass();
$intents->categories[6]->entities[4]->entity = 'TVSeries';
$intents->categories[6]->entities[4]->signatures = array();
$intents->categories[6]->entities[4]->signatures[] = array('name'=>'AMAZON.PlaybackAction<object@TVSeries>');
$intents->categories[6]->entities[4]->signatures[] = array('name'=>'AMAZON.ResumeAction<object@TVSeries>');

$intents->categories[6]->entities[5] = new stdclass();
$intents->categories[6]->entities[5]->entity = 'VideoCreativeWork';
$intents->categories[6]->entities[5]->signatures = array();
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.ChooseAction<object@VideoCreativeWork,sourceCollection@VideoPlaylist>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.ChooseAction<object@VideoCreativeWork>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.CloseAction<object@VideoCreativeWork>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.DislikeAction<object@VideoCreativeWork>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.LikeAction<object@VideoCreativeWork>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.PlaybackAction<object@VideoCreativeWork>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.RateAction<object@VideoCreativeWork>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.RestartAction<object@VideoCreativeWork>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.ResumeAction<object@VideoCreativeWork>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.SearchAction<object@VideoCreativeWork,sourceCollection@VideoPlaylist>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.SearchAction<object@VideoCreativeWork>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.SearchAction<object@VideoCreativeWork[actor]>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.SearchAction<object@VideoCreativeWork[audience]>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.SearchAction<object@VideoCreativeWork[contentRating]>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.SearchAction<object@VideoCreativeWork[dateReleased]>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.SearchAction<object@VideoCreativeWork[description]>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.SearchAction<object@VideoCreativeWork[director]>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.SearchAction<object@VideoCreativeWork[genre]>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.SearchAction<object@VideoCreativeWork[musicBy]>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.SearchAction<object@VideoCreativeWork[name]>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.StopAction<object@VideoCreativeWork>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.SuspendAction<object@VideoCreativeWork>');
$intents->categories[6]->entities[5]->signatures[] = array('name'=>'AMAZON.WatchAction<object@VideoCreativeWork>');

$intents->categories[6]->entities[6] = new stdclass();
$intents->categories[6]->entities[6]->entity = 'VideoPlaylist';
$intents->categories[6]->entities[6]->signatures = array();
$intents->categories[6]->entities[6]->signatures[] = array('name'=>'AMAZON.ChooseAction<object@VideoCreativeWork,sourceCollection@VideoPlaylist>');
$intents->categories[6]->entities[6]->signatures[] = array('name'=>'AMAZON.ExitAction<object@VideoPlaylist>');
$intents->categories[6]->entities[6]->signatures[] = array('name'=>'AMAZON.SearchAction<object@VideoCreativeWork,sourceCollection@VideoPlaylist>');


$intents->categories[7] = new stdclass();
$intents->categories[7]->category = 'Weather';
$intents->categories[7]->entities = array();
$intents->categories[7]->entities[0] = new stdclass();
$intents->categories[7]->entities[0]->entity = 'WeatherForecast';
$intents->categories[7]->entities[0]->signatures = array();
$intents->categories[7]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@WeatherForecast>');
$intents->categories[7]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@WeatherForecast[temperature]>');
$intents->categories[7]->entities[0]->signatures[] = array('name'=>'AMAZON.SearchAction<object@WeatherForecast[weatherCondition]>');


$intents->categories[8] = new stdclass();
$intents->categories[8]->category = 'Standard';
$intents->categories[8]->entities = array();
$intents->categories[8]->entities[0] = new stdclass();
$intents->categories[8]->entities[0]->entity = 'Standard';
$intents->categories[8]->entities[0]->signatures = array();
$intents->categories[8]->entities[0]->signatures[] = array('name'=>'AMAZON.CancelIntent');
$intents->categories[8]->entities[0]->signatures[] = array('name'=>'AMAZON.HelpIntent');
$intents->categories[8]->entities[0]->signatures[] = array('name'=>'AMAZON.LoopOffIntent');
$intents->categories[8]->entities[0]->signatures[] = array('name'=>'AMAZON.LoopOnIntent');
$intents->categories[8]->entities[0]->signatures[] = array('name'=>'AMAZON.NextIntent');
$intents->categories[8]->entities[0]->signatures[] = array('name'=>'AMAZON.NoIntent');
$intents->categories[8]->entities[0]->signatures[] = array('name'=>'AMAZON.PauseIntent');
$intents->categories[8]->entities[0]->signatures[] = array('name'=>'AMAZON.PreviousIntent');
$intents->categories[8]->entities[0]->signatures[] = array('name'=>'AMAZON.RepeatIntent');
$intents->categories[8]->entities[0]->signatures[] = array('name'=>'AMAZON.ResumeIntent');
$intents->categories[8]->entities[0]->signatures[] = array('name'=>'AMAZON.ShuffleOffIntent');
$intents->categories[8]->entities[0]->signatures[] = array('name'=>'AMAZON.ShuffleOnIntent');
$intents->categories[8]->entities[0]->signatures[] = array('name'=>'AMAZON.StartOverIntent');
$intents->categories[8]->entities[0]->signatures[] = array('name'=>'AMAZON.StopIntent');
$intents->categories[8]->entities[0]->signatures[] = array('name'=>'AMAZON.YesIntent');