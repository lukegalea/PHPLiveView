defmodule PhoenixAppWeb.DemoLive do
  use PhoenixAppWeb, :live_view

  import Calendar.Strftime

  # def render(assigns) do
  #   ~L"""
  #     <div class="Clock">
  #       <%= strftime!(@date, "%r") %>
  #     </div>
  #   """
  # end

  def mount(_params, _session, socket) do
    socket = put_date(socket)

    if connected?(socket), do: :timer.send_interval(1000, self(), :tick)

    {:ok, put_date(socket)}
  end

  def handle_info(:tick, socket) do
    {:noreply, put_date(socket)}
  end

  defp put_date(socket) do
    assign(socket, date: :calendar.local_time())
  end
end