layout: post
title:  SentenceVAE：Enable Next-sentence Prediction for Large Language Models with Faster Speed, Higher Accuracy and Longer Context
date:   2024-8-1-00-00-00
categories: papers
abstract: Current large language models (LLMs) primarily utilize next-token prediction method for inference, which significantly impedes their processing speed. In this paper, we introduce a novel inference methodology termed next-sentence prediction, aiming at enhancing the inference efficiency of LLMs. We present Sentence Variational Autoencoder (SentenceVAE), which includes a Sentence Encoder to compress multiple tokens in a sentence into a single token, and a Sentence Decoder to reconstruct it.
img: /public/img/paper_sentencevae.jpg
arxiv: arxiv.org/abs/2408.00655
github: github.com/BestAnHongjun/SentenceVAE
id: 1
------

![](/public/img/paper_sentencevae_overview.jpg)

Link: [[ArXiv]](https://arxiv.org/abs/2408.00655) [[GitHub]](https://github.com/BestAnHongjun/SentenceVAE)

Current large language models (LLMs) primarily utilize next-token prediction method for inference, which significantly impedes their processing speed. In this paper, we introduce a novel inference methodology termed next-sentence prediction, aiming at enhancing the inference efficiency of LLMs. We present Sentence Variational Autoencoder (SentenceVAE), which includes a Sentence Encoder to compress multiple tokens in a sentence into a single token, and a Sentence Decoder to reconstruct it. By integrating SentenceVAE into the input and output layers of LLMs, we develop Sentence-level LLMs (SLLMs) that employ a sentence-by-sentence inference method. In addition, the SentenceVAE module of SLLMs can maintain the integrity of the original semantic content by segmenting the context into sentences, thereby improving accuracy while boosting inference speed. Moreover, compared to previous LLMs, SLLMs process fewer tokens over equivalent context length, significantly reducing memory demands for self-attention computation and facilitating the handling of longer context. Extensive experiments on Wanjuan dataset have revealed that the proposed method can accelerate inference speed by 204~365%, reduce perplexity (PPL) to 46~75% of its original metric, and decrease memory overhead by 86~91% for the equivalent context length, compared to previous token-by-token methods.