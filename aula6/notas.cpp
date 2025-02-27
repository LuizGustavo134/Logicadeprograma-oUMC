namespace InterfacesTest
{
    public enum class PlayState {Playing, Paused, Stopped, Forward, Reverse};

    public ref struct MediaPlayerEventArgs sealed
    {
        property PlayState oldState;
        property PlayState newState;
    };

    public delegate void OnStateChanged(Platform::Object^ sender, MediaPlayerEventArgs^ a);
    public interface class IMediaPlayer // or public interface struct IMediaPlayer 
    {
        event OnStateChanged^ StateChanged;
        property Platform::String^ CurrentTitle;
        property PlayState CurrentState;
        void Play();
        void Pause();
        void Stop();
        void Back(float speed);
        void Forward(float speed);
    };
}