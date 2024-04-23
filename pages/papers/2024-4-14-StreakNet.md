layout: post
title:  StreakNet-Arch：An Anti-scattering Network-based Architecture for Underwater Carrier LiDAR-Radar Imaging
date:   2024-4-14-00-00-00
categories: papers
abstract: In this paper，we introduce StreakNet-Arch，a novel signal processing architecture designed for Underwater Carrier LiDAR-Radar (UCLR) imaging systems，to address the limitations in scatter suppression and real-time imaging
img: /public/img/paper_streaknet_overview.jpeg
arxiv: arxiv.org/abs/2404.09158
github: github.com/BestAnHongjun/StreakNet
id: 1
------

![](/public/img/paper_streaknet_overview.jpeg)

Link: [[ArXiv]](https://arxiv.org/abs/2404.09158) [[GitHub]](https://github.com/BestAnHongjun/StreakNet)

In this paper, we introduce StreakNet-Arch, a novel signal processing architecture designed for Underwater Carrier LiDAR-Radar (UCLR) imaging systems, to address the limitations in scatter suppression and real-time imaging. StreakNet-Arch formulates the signal processing as a real-time, end-to-end binary classification task, enabling real-time image acquisition. To achieve this, we leverage Self-Attention networks and propose a novel Double Branch Cross Attention (DBC-Attention) mechanism that surpasses the performance of traditional methods. Furthermore, we present a method for embedding streak-tube camera images into attention networks, effectively acting as a learned bandpass filter. To facilitate further research, we contribute a publicly available streak-tube camera image dataset. The dataset contains 2,695,168 real-world underwater 3D point cloud data. These advancements significantly improve UCLR capabilities, enhancing its performance and applicability in underwater imaging tasks.