---
title: Flutter Multiple Stream Builder Package
publishedDate: 2020-12-19T00:01:00-06:00
description: Flutter widgets for avoiding nested StreamBuilder
---

When working with Flutter I find myself working with streams quite a bit. They're a great way to allow various parts of your app to be notified when data changes and keep things reactive. 

Flutter even provides a built-in widget for working with streams called `StreamBuilder`. This widget allows you to pass in a stream along with a builder method that will get called every time the stream receives new data. Here's a quick example of how to use a StreamBuilder:

```dart
var stream = Stream<int>.periodic(Duration(seconds: 1));

Widget build(BuildContext context) {
  return StreamBuilder<int>(
    stream: stream,
    builder: (context, snapshot) {
      return Text('value: ${snapshot.data}');
    },
  );
}
```

For the most part, StreamBuilder works well. That is until you need values from multiple streams to build your UI. In that case, you have to resort to nesting StreamBuilders. Which, depending on how complicated your build method is can get a bit ugly. 

```dart
var stream1 = Stream<int>.periodic(Duration(seconds: 1), (x) => x);
var stream2 = Stream<int>.periodic(Duration(seconds: 2), (x) => x);
var stream3 = Stream<int>.periodic(Duration(seconds: 3), (x) => x);

Widget build(BuildContext context) {
  return StreamBuilder<int>(
    stream: stream1,
    builder: (context, snapshot1) {
      return StreamBuilder<int>(
        stream: stream2,
        builder: (context, snapshot2) {
          return StreamBuilder<int>(
            stream: stream3,
            builder: (context, snapshot3) {
              return Text(
                'stream1: ${snapshot1.data} - stream2: ${snapshot2.data} - stream3: ${snapshot3.data}',
              );
            },
          );
        },
      );
    },
  );
}
```

So how can we clean this up? Let me introduce a package I published called [`multiple_stream_builder`](https://pub.dev/packages/multiple_stream_builder).
This package provides new widgets that behave almost the same as a normal StreamBuilder, but it allows you to pass in multiple streams instead of just one.

```dart
Widget build(BuildContext context) {
  return StreamBuilder3<int, int, int>(
    streams: StreamTuple3(stream1, stream2, stream3),
    builder: (context, snapshots) {
      return Text(
        'stream1: ${snapshots.snapshot1.data} - stream2: ${snapshots.snapshot2.data} - stream3: ${snapshots.snapshot3.data}',
      );
    },
  );
}
```

As you can see this greatly shortens the amount of code we have to add as well as reduces the amount of nesting we need. 

Due to some [technical limitations with the Dart language](https://github.com/dart-lang/language/issues/363) you have to use a different StreamBuilder depending on the number of streams you want to pass in. For example, if you need data from 4 streams you'd use `StreamBuilder4` while you'd use `StreamBuilder2` for 2 streams.

If you want to get started using the package you can see the installation instructions on the [package's pub.dev page](https://pub.dev/packages/multiple_stream_builder). If you run into any issues with the package or would like to suggest a feature feel free to open an issue on the [Github repo](https://github.com/glitchedmob/flutter_multiple_stream_builder).